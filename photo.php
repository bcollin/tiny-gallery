<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>Foto - Something about me</title>
	<style type="text/css">
	<!--
	a img {
		border: 0;
	}
	img {
		margin: 1em;
		vertical-align: top;
	}
	-->
	</style>
</head>

<body>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : "0";
$id = sprintf("%02d", $id);
if ($id < 1) {
	$id = "01";
}

$next = $id + 1;
if ($next > 16) {
	$next = 1;
}
?>

<p><a href="index.html">overzicht</a></p>

<a href="photo.php?id=<?=$next?>"><img src="gallery_example/<?=$id?>.png" alt="" title=""></a>

</body>
</html>
