<?php
  $method = $_SERVER['REQUEST_METHOD'];
  $request = isset($_GET['request']) ? $_GET['request'] : "";
  $uri = explode("/", $request);
  $controller = isset($uri[0]) ? $uri[0] : "";
  $id = isset($uri[1]) ? $uri[1] : 0;

  # db 사용
  $dbh = new PDO("mysql:host=localhost; dbname=smartspacephp; charset=utf8", "smartspacephp", "rhdrkswjdqh2018");
  if ($controller == "friend") {
    if ($method == "GET") {
      $sql = "SELECT * FROM friends";
      if ($id) {
        $sql .= " WHERE id={$id}";
      }
      if ($sth = $dbh->query($sql)) {
        $friend = $sth->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($friend, JSON_UNESCAPED_UNICODE);
      }
    } else if ($method == "DELETE") {
      $result = array("delete" => "false", "id" => 0, "count" => 0);
      if ($id) {
        $sql = "DELETE FROM friends WHERE id={$id}";
        if ($sth = $dbh->query($sql)) {
          if ($sth->rowCount()) {
            $result["delete"] = "true";
            $result["id"] = $id;
            $result["count"] = $sth->rowCount();
          }
        }
      }
      echo json_encode($result);
    } else if ($method == "POST") {
      $result = array("name" => "", "count" => 0);
      $name = isset($_POST["name"]) ? $_POST["name"] : "";
      $city = isset($_POST["city"]) ? $_POST["city"] : "";
      $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
      $email = isset($_POST["email"]) ? $_POST["email"] : "";
      if ($name && $city && $phone && $email) {
        $sql = "INSERT INTO friends(name, city, phone, email)";
        $sql .= " VALUES('{$name}', '{$city}', '{$phone}', '{$email}')";
        if ($sth = $dbh->query($sql)) {
          if ($sth->rowCount()) {
            $result["name"] = $name;
            $result["count"] = $sth->rowCount();
          }
        }
      }
      echo json_encode($result, JSON_UNESCAPED_UNICODE);
    } else if ($method == "PUT") {
      $result = array("success" => "false", "id" => 0);
      if ($id) {
        $putdata = file_get_contents("php://input"); // => form에서 서버로 전송된 모든 data
        $data = array();
        parse_str($putdata, $data);                  // => 문자열을 배열로 변환
        if ($data["name"] && $data["city"] && $data["phone"] && $data["email"]) {
          $sql = "UPDATE friends SET";
          $sql .= " name='{$data['name']}'";
          $sql .= ", city='{$data['city']}'";
          $sql .= ", phone='{$data['phone']}'";
          $sql .= ", email='{$data['email']}'";
          $sql .= " WHERE id={$id}";
          if ($sth = $dbh->query($sql)) {
            if ($sth->rowCount()) {
              $result["success"] = "true";
              $result["id"] = $id;
            }
          }
        }
      }
      echo json_encode($result, JSON_UNESCAPED_UNICODE);
    }
  }
