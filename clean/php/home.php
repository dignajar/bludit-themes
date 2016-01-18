<div id="fh5co-portfolio">

<?php $right = false; ?>

<?php foreach ($pages as $Page): ?>

	<div class="fh5co-portfolio-item <?php echo ($right ? 'fh5co-img-right' : ''); ?>">
		<div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $Page->coverImage() ?>);"></div>
		<div class="fh5co-portfolio-description">
			<h2><?php echo $Page->title() ?></h2>
			<?php echo $Page->content(false) ?>
			<p><a href="<?php echo $Page->permalink() ?>" class="btn btn-primary"><?php echo $Language->get('Read more') ?></a></p>
		</div>
	</div>

<?php $right = !$right; ?>

<?php endforeach; ?>

</div>