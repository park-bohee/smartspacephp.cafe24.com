<div class="community">
  <div class="search">
    <form action="section.php" method="post">
      <input type="text" name="search" class="form-control" placeholder="제목 검색" autocomplete=off>
      <a href="write.php" class="btn btn-warning">글쓰기</a>
    </form>
  </div>
  <table class="table table-hover">
    <thead>
      <tr class="warning">
        <th>no</th>
        <th>title</th>
        <th>write</th>
        <th>date</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $sql = "SELECT * FROM nogchanews ORDER BY wdate desc";

        $rs = $db->query($sql);
        $rows = $rs->fetchAll();
        $cnt = 0;
        foreach ($rows as $row) {
          $cnt++;
      ?>
      <tr>
        <td><?php echo $cnt ?></td>
        <td><a href="view.php?no=<?php echo $row['no'] ?>"><?php echo $row['title'] ?></a></td>
        <td><?php echo $row['writer'] ?></td>
        <td><?php echo substr($row['wdate'], 0, 10) ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>