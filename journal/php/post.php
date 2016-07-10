<article class="post">

	<!-- Show plugins, Hook: Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->
	<header>
		<div class="title">
			<h1><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h1>
		</div>
		<div class="meta">
	                <?php
	                	// Get the user who created the post.
	                	$User = $Post->user();

	                	// Default author is the username.
	                	$author = $User->username();

	                	// If the user complete the first name or last name this will be the author.
				if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
					$author = $User->firstName().' '.$User->lastName();
				}
			?>

			<div class="timestamp"><span class="name">Post by <?php echo $author ?> on <time class="published" datetime="2015-11-01"><?php echo $Post->date() ?></time></span></div>

		</div>
	</header>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content() ?>

	<!-- Post's footer -->
	<footer>

		<!-- Post's tags -->
		<ul class="stats">
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '<li><a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></li>';
			}
		?>
		</ul>
	</footer>

	<!-- Show plugins, Hook: Post End -->
	<?php Theme::plugins('postEnd') ?>

</article>
