<?php
$name = 'gallery';
$title = $page_title = 'Tiny Gallery example';

require_once('header.php');
?>
	<div>
	<?php
		for ($i = 1; $i < (1 + $conf['length']); $i++) : 
		$ii = sprintf("%02d", $i); 
	?>
		<a href="photo.php?id=<?=$ii?>"><?php print the_image($ii); ?></a>
	<?php endfor; ?>
	</div>
	
<?php
require_once('footer.php');
