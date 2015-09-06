<!-- Post -->
<div class="post">

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Heading -->
	<a href="<?php echo $Post->permalink() ?>"><h1><?php echo $Post->title() ?></h1></a>

	<hr>

	<div class="in-content">
        <?php echo $Post->content(false) ?>

        <?php if($Post->readMore()) { ?>
        <a class="read-more" href="<?php echo $Post->permalink() ?>"><?php $Language->p('Read more') ?></a>
	<?php } ?>
	</div>

	<div class="foot-post">
		<div class="units-row">
		    <div class="unit-100">
		    	<strong><?php $Language->p('Tags') ?></strong>
		    	<?php
		    	foreach($Post->tags(true) as $tagName) {
		    		echo '<a href="#">'.$tagName.'</a>';
		    	}
		    	?>
		    </div>
		</div>
	</div>

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

</div>
<!-- /post -->