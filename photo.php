<?php

$id = isset($_GET['id']) ? $_GET['id'] : "0";
$id = sprintf("%02d", $id);
if ($id < 1) {
	$id = "01";
}

$name = 'photo';
$title = $page_title = 'Photo ' . $id;

require_once('header.php');

$next = ($id > ($conf['length'] - 1)) ? 1 : $id + 1;
$prev = ($id > 1) ? $id - 1 : $conf['length'];
?>

<p class="breadcrumbs"><a href="./">Overview</a> / Photo <?php print $id; ?></p>

<div class="item">
  <a href="photo.php?id=<?=$next?>"><?php print the_image($id); ?></a>
  
  
  <div class="nav nav-pager">
    <a href="photo.php?id=<?=$prev?>" class="prev"><span>Previous entry</span></a>
    <a href="photo.php?id=<?=$next?>" class="next"><span>Next entry</span></a>
  </div>
</div>

<?php
require_once('footer.php');
