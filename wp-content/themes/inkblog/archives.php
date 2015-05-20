<?php
/*
Template Name: Snazzy Archives
*/

?>

<?php get_header(); ?>

<div class="main-container col1-layout">
	<div class="main">
		<div class="col-main">

			<p align="center">
				<?php if (isset($SnazzyArchives)) echo $SnazzyArchives->display(""); ?>
			</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>