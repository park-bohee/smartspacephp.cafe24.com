<?php include("header.php"); ?>

<article>
	<form action="writeok.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">제목</label>
			<input type="text" name="title" id="title" required class="form-control">
		</div>
		<div class="form-group">
			<label for="writer">글쓴이</label>
			<input type="text" name="writer" id="writer" required class="form-control">
		</div>
		<div class="form-group">
			<label for="body">본문</label>
			<textarea name="body" id="body" rows="10" required class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="upfile">첨부사진</label>
			<input type="file" name="upfile" id="upfile" class="form-control" accept="image/*">
		</div>
		<button type="submit" class="btn btn-primary">글저장</button>
	</form>
</article>

<?php include("footer.php"); ?>