<?php include("config.php");
    if( !$login):
?>
    <script>
        alert("로그인을 해야 댓글 달기가 가능합니다");
        history.back(); // 바로 이전 페이지로 돌아가기
    </script>
<?php
    exit;

    endif;

    $id = 0;
    $content = "";
    
    if( isset($_POST['id']) ) {
        $id = $_POST['id'];
    }
    if( isset($_POST['content']) ) {
        $content = $_POST['content'];
    }

    if( $id && $content ) {

        $sql = "INSERT INTO parcelcmt SET";
        $sql.= " id={$id}";
        $sql.= ", writer='{$loginname}'";
        $sql.= ", content='{$content}'";
        $sql.= ", wdate=now()";
        
        $db->query($sql);

    }

    header("Location: parcel-out-view.php?id={$id}");
?>