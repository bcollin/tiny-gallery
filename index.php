<?php
$title = $page_title = 'Tiny Gallery example';

require_once('header.php');
?>
	<div class="gallery">
	<?php
		for ($i = 1; $i < (1 + $conf['length']); $i++) : 
		$ii = sprintf("%02d", $i); 
	?>
		<a href="photo.php?id=<?=$ii?>"><img src="gallery_example/<?=$ii?>.<?=$conf['type']?>" alt="[image]" title=""></a>
	<?php endfor; ?>
	</div> <!-- /.gallery -->
	
<?php
require_once('footer.php');
