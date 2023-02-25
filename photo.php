<?php

$id = isset($_GET['id']) ? $_GET['id'] : "0";
$id = sprintf("%02d", $id);
if ($id < 1) {
	$id = "01";
}

$title = $page_title = 'Photo ' . $id;

require_once('header.php');

$next = ($id > ($conf['length'] - 1)) ? 1 : $id + 1;
$prev = ($id > 1) ? $id - 1 : $conf['length'];
?>

<p class="breadcrumbs"><a href="./">Overview</a> / Photo <?php print $id; ?></p>

<div class="item"><a href="photo.php?id=<?=$next?>"><img src="gallery_example/<?=$id?>.<?=$conf['type']?>" alt="[entry]" title=""></a></div>

<div class="nav nav-pager">
  <a href="photo.php?id=<?=$prev?>">Previous entry</a>
  <a href="photo.php?id=<?=$next?>">Next entry</a>
</div>

<?php
require_once('footer.php');
