<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<title>NAVER NEWS</title>
	<style>
		* {margin: 0; padding: 0; box-sizing: border-box;}
		.header {
			width: 100%;
			height: 75px;
			background-color: #f2f2f2;
			padding: 17.5px 20px;
		}
		.header h3 {
			font-size: 36px;
			float:left;
			margin-top: -7px;
			margin-right: 20px;
		}
		.header h3 a {
			color: #3eaf0e;
			text-decoration: none; 
			font-weight: normal;
			font-family: 'Rubik Mono One', sans-serif;
		}
    .header input {
			width: 650px; 
			border-radius: 2px;
			font-size: 17px; 
			border: none; 
			padding: 10px 15px; 
			background-color: #fff;
			border: 0.5px solid #d9d9d9;
		}	
		.section ul li {
			width: 650px;
			height: 100px;
			padding: 10px;
			white-space: nowrap;
			list-style: none;
		}
		.section {
			width: 100%;
			margin: 30px 185px;
		}
		.section ul li a {
			display: inline-block;
			width: 100%;
			text-decoration: none;
			font-size: 17.5px;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.section ul li a:hover {
			text-decoration: underline;
		}
		.section ul li .link {
			color: #006621;
			margin-bottom: 5px;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.section ul li .description {
			color: #545454;
			font-size: 14px;
			overflow: hidden;
			text-overflow: ellipsis;
		}
	</style>
</head>
<body>
<div id="wrap">
	<div class="header">
		<h3><a href="naver.html">NAVER</a></h3>
		<form onsubmit="return false">
			<?php 
		$sch = "";
		if( isset($_GET['sch']) ) { 
			$sch = $_GET['sch'];
			?>
			<input type="text" value="<?php echo $sch?>" id="search" autocomplete="off">
			<?php } ?> 
		</form>
	</div>
	<div class="section">
		<ul>
			<?php 
			$sch = "";
			if( isset($_GET['sch']) ) $sch = $_GET['sch'];
			$news = "http://newssearch.naver.com/search.naver?where=rss&query={$sch}&field=0&nx_search_query=&nx_and_query=&nx_sub_query=&nx_search_hlquery=";
			$xml = simplexml_load_file($news);
			$channel = $xml->channel;
			$newslist = $channel->item;
			foreach( $newslist as $news ){
					$title = $news->title;
					$author = $news->author;
					$link = $news->link;
					$category = $news->category;
					$pubDate = $news->pubDate;
					$description = $news->description
			?>
			<li>
				<a href="<?php echo $link ?>" target="_blank"><?php echo $title; ?></a>
				<p class="link"><?php echo $link ?></p>
				<p class="description"><?php echo $description; ?></p>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
<script>
	function getNews(sval) {
		var rss = "naver.php?sch=";
		var search = rss + encodeURIComponent(sval);
		location.href = search;
	}

	$("#search").keydown(function (e) {
		if (e.keyCode == 13) {
			$(".section ul li").remove();
			var sval = $(this).val();
			getNews(sval);
		};
	});
</script>
</body>
</html>