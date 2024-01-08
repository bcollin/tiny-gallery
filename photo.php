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
  <a href="photo.php?id=<?=$next?>"><img src="gallery_example/<?=$id?>.<?=$conf['type']?>" alt="[entry]" title=""></a>
  
  
  <div class="nav nav-pager">
    <a href="photo.php?id=<?=$prev?>" class="prev"><span>Previous entry</span></a>
    <a href="photo.php?id=<?=$next?>" class="next"><span>Next entry</span></a>
  </div>
</div>

<style>
.item { position: relative;}
.item > a { display: block; text-align: center;}
.item > a > img { margin: 0; }
.nav-pager { 
  position: absolute; 
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
}
.nav-pager a { 
  display: block;
  position: absolute;
  width: 50%; 
  height: 100%;
  font-weight: bold;
  color: red;
  text-decoration: none;
  text-align: right;
}
.nav-pager a:last-child {
  right: 0px;
  text-align: left;
}
.nav-pager a span {
  position: relative; 
  top: 2em;
  margin: 1em;
  padding: .5em;
  background: #fff;
}

<style>

<?php
require_once('footer.php');
