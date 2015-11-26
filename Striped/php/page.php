<article class="post">

	<!-- Plugins Page Begin -->
	<?php Theme::plugins('pageBegin') ?>

	<!-- Post's header -->
	
	<article class="box post post-excerpt">
	<header>
			<h2><a href="<?php echo $Page->permalink() ?>"><?php echo $Page->title() ?></a></h2>
			<p><?php echo $Page->description() ?></p>
	</header>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Page->content() ?>

	<!-- Plugins Page End -->
	<?php Theme::plugins('pageEnd') ?>

</article>