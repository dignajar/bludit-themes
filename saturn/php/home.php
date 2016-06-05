<?php foreach ($posts as $Post): ?>

<!-- Post -->
<div class="post">

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Heading -->
	<a href="<?php echo $Post->permalink() ?>"><h1><?php echo $Post->title() ?></h1></a>

	<hr>
	<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="featured-image"><img src="'.$Post->coverImage().'" alt="Cover Image"></a>';
		}
	?>
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
			$links = array();
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				$links[] = '<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
			}

			echo implode(', ', $links);
		?>
	</div>
	</div>
	</div>

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

</div>
<!-- /post -->

<?php endforeach; ?>

<!-- Paginator for posts -->
<?php echo Paginator::html() ?>