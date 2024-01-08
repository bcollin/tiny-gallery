<?php 
  $conf['type'] = 'png';
  $conf['length'] = 16;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print $title; ?></title>
	<style type="text/css">
	<!--
  a img { 
    border: none; 
  }
	.gallery a img {
		border: .2em solid blue; 
	}
	img {
		max-width: 100%;
		height: auto;
		margin: 1em 0em;
		vertical-align: top;
	}
	.gallery img {
		max-width: 20%;
		margin: 1em;
	}
	#main {
		text-align: left;
	}
  .gallery #main 
	-->
	</style>
</head>

<body class="<?=$name?>">


<div id="main">

	<h1><?php print $page_title; ?></h1>

