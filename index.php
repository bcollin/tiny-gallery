<?php
$title = $page_title = 'Tiny Gallery example';

require_once('header.php');
?>
	<div class="gallery">
	<?php
		for ($i = 1; $i < 17; $i++) : 
		$ii = sprintf("%02d", $i); 
	?>
		<a href="photo.php?id=<?php print $ii; ?>"><img src="gallery_example/<?php print $ii; ?>.png" alt="" title=""></a>
	<?php endfor; ?>
	</div> <!-- /.gallery -->
	
<?php
require_once('footer.php');
