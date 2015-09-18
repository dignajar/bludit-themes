<!-- Page -->
<div class="post">

	<!-- Plugins Page Begin -->
	<?php Theme::plugins('pageBegin') ?>

	<!-- Heading -->
	<a href="<?php echo $Page->permalink() ?>"><h1><?php echo $Page->title() ?></h1></a>

	<hr>

	<div class="in-content">
        <?php echo $Page->content() ?>

	<!-- Plugins Page End -->
	<?php Theme::plugins('pageEnd') ?>

</div>
<!-- /Page -->