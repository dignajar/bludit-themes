<?php foreach ($posts as $Post): ?>

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<article class="thumb">
	<!-- Cover Image -->
	<?php
	if($Post->coverImage()) {
		echo '<a href="'.$Post->coverImage().'" class="image"><img src="'.$Post->coverImage().'" alt="CoverImage" /></a>';
	}
	?>
	<h2><?php echo $Post->title() ?></h2>
	<p><?php echo $Post->content() ?></p>
	</article>

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

<?php endforeach; ?>
