<?php 
  $conf['type'] = 'png';
  $conf['length'] = 16;

  // Renders an image tag.
  function the_image($id=0) {
    global $conf; 
    
    $gallery = 'gallery_example/';
    $file_name = $id . '.' . $conf['type'];
    $img_url = $gallery . $file_name;
    $src_set = $gallery . 'thumbs_320/' . $file_name . ' 320w, ';
    $src_set .= $gallery . 'thumbs_480/' . $file_name . ' 480w, ';
    $src_set .= $gallery . 'thumbs_720/' . $file_name . ' 720w, ';
    $src_set .= $img_url . ' 1200w';
    $sizes = '(max-width: 320px) 320px, (min-width: 480px) 480px, (max-width: 720px) 720px, 1200px';
    
    $html = '<img src="' . $img_url . '" srcset="' . $src_set . '" sizes="' . $sizes . '" alt="[entry]" title="">';
    
    print $html;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
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

