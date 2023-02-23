<?php

$id = isset($_GET['id']) ? $_GET['id'] : "0";
$id = sprintf("%02d", $id);
if ($id < 1) {
	$id = "01";
}

$title = $page_title = 'Photo ' . $id;

require_once('header.php');

$next = $id + 1;
if ($next > 16) {
	$next = 1;
}
?>

<p class="breadcrumbs"><a href="./">Overview</a> / Photo <?php print $id; ?></p>

<a href="photo.php?id=<?=$next?>"><img src="gallery_example/<?=$id?>.<?=$conf['type']?>" alt="" title=""></a>

<?php
require_once('footer.php');
