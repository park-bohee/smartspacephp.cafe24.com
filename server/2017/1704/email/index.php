<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Email</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Harmattan" rel="stylesheet">
</head>
<body>
	<div>
		<img src="email.png" alt="">
		<h1>Email</h1>
		<form action="send.php" method="post">
			<table>
				<tr>
					<td>To : </td>
					<td><input type="text" name="to" id="to" placeholder="to"></td>
				</tr>
				<tr>
					<td>Title : </td>
					<td><input type="text" name="title" id="title" placeholder="title"></td>
				</tr>
				<tr>
					<td>Contents : </td>
					<td><input type="text" name="contents" id="contents" placeholder="contents"></td>
				</tr>
				<tr>
					<td>From : </td>
					<td><input type="text" name="from" id="from" placeholder="from"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit">Send</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>