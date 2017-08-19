<!-- Show each post on this page -->
<?php foreach ($posts as $Post): ?>

<article class="post">

	<!-- Show plugins, Hook: Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->
	<header>
		<div class="title">
			<h1><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h1>
			<p><?php echo $Post->description() ?></p>
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
			<div class="bl-author text-left">
			<time class="published" datetime="2015-11-01"><p>posted on <?php echo $Post->date() ?> by : <?php echo $author ?></p></time>
			<!-- Author profile
			-->
			<img src="<?php echo $User->profilePicture() ?>" alt="">
<!-- Author name
			-->
			
		</div>
		</div>
	</header>

	<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="image featured"><img src="'.$Post->coverImage().'" alt="Cover Image"></a>';
		}
	?>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content(false) ?>

	<!-- Post's footer -->
	<footer>

		<!-- Read more button -->
	        <?php if($Post->readMore()) { ?>
		<ul class="actions">
			<li><a href="<?php echo $Post->permalink() ?>" class="button"><?php $Language->p('Read more') ?></a></li>
		</ul>
		<?php } ?>

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

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

</article>

<?php endforeach; ?>

<!-- Pagination -->
<ul class="actions pagination">
<?php
	if( Paginator::get('showNewer') ) {
		echo '<li><a href="'.Paginator::urlFirstPage().'" class="button big first">'.$Language->get('First page').'</a></li>';
		echo '<li><a href="'.Paginator::urlPrevPage().'" class="button big previous">'.$Language->get('Prev page').'</a></li>';
	}

	if( Paginator::get('showOlder') ) {
		echo '<li><a href="'.Paginator::urlNextPage().'" class="button big next">'.$Language->get('Next page').'</a></li>';
		echo '<li><a href="'.Paginator::urlLastPage().'" class="button big last">'.$Language->get('Last page').'</a></li>';
	}
?>
</ul>