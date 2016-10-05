<!-- Page -->
<div class="post">

	<!-- Plugins Page Begin -->
	<?php Theme::plugins('pageBegin') ?>

	<!-- Heading -->
	<a href="<?php echo $Page->permalink() ?>"><h1><?php echo $Page->title() ?></h1></a>

	<hr>
	<!-- Cover Image -->
	<?php
		if($Page->coverImage()) {
			echo '<a href="'.$Page->permalink().'" class="featured-image"><img src="'.$Page->coverImage().'" alt="Cover Image"></a>';
		}
	?>
	
	<div class="in-content">
        <?php echo $Page->content() ?>

	<!-- Plugins Page End -->
	<?php Theme::plugins('pageEnd') ?>

</div>
<!-- /Page -->