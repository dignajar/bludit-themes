<?php foreach ($posts as $Post): ?>

<article class="post">

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->
	<header>
		<div class="title">
			<h2><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h2>
			<p><?php echo $Post->description() ?></p>
		</div>
		<div class="meta">
	                <?php
	                	// Author
	                	$author = $Post->username();

				if( Text::isNotEmpty($Post->authorFirstName()) || Text::isNotEmpty($Post->authorLastName()) ) {
					$author = $Post->authorFirstName().' '.$Post->authorLastName();
				}
			?>
			<time class="published" datetime="2015-11-01"><?php echo $Post->date() ?></time>
			<a href="#" class="author"><span class="name"><?php echo $author ?></span><img src="<?php echo $Post->profilePicture() ?>" alt=""></a>
		</div>
	</header>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content(false) ?>

	<!-- Post's footer -->
	<footer>

		<!-- Read more button -->
	        <?php if($Post->readMore()) { ?>
		<ul class="actions">
			<li><a href="<?php echo $Post->permalink() ?>" class="button big"><?php $Language->p('Read more') ?></a></li>
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
		echo '<li><a href="'.HTML_PATH_ROOT.'?page='.Paginator::get('prevPage').'" class="button big previous">Previous Page</a></li>';
	}

	if( Paginator::get('showOlder') ) {
		echo '<li><a href="'.HTML_PATH_ROOT.'?page='.Paginator::get('nextPage').'" class="button big next">Next Page</a></li>';
	}
?>
</ul>