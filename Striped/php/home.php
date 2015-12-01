<?php foreach ($posts as $Post): ?>

<article class="post">
				

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->

	<article class="box post post-excerpt">
	<header>
					<h2><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h2>
			<p><?php echo $Post->description() ?></p>
		
		<div class="info">
	               
			<span class="date"><span class="month"><?php echo $Post->date() ?></span></span>
				<!--<ul class="stats">
									<a href="#" class="icon fa-google"></a>
									<a href="#" class="icon fa-linkedin"></a>
									<a href="#" class="icon fa-twitter"></a>
									<a href="#" class="icon fa-facebook"></a>
								</ul>	-->			
		</div>
	</header>
	

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content(false) ?>
</article>
	<!-- Post's footer -->
	<footer>
	

		<!-- Read more button -->
		<div align="right">
	        <?php if($Post->readMore()) { ?>
		<ul class="actions">
			<li><a href="<?php echo $Post->permalink() ?>" class="button"><?php $Language->p('Read more') ?></a></li>
		</ul>
		<?php } ?></div>

		<!-- Post's footer -->
	  <div align="right">
		<strong><?php $Language->p('Tags') ?></strong>
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '&nbsp;|&nbsp <a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
			}
		?> &nbsp;|&nbsp
		    <?php
	                	$author = $Post->username();

				if( Text::isNotEmpty($Post->authorFirstName()) || Text::isNotEmpty($Post->authorLastName()) ) {
					$author = $Post->authorFirstName().' '.$Post->authorLastName();
				}
			?>
			<time><?php echo $Post->date() ?></time>&nbsp;|&nbsp
			<span  div class="name"><?php echo $author ?> </div></span>

	
	</footer>

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

</article>
<?php endforeach; ?>

<!-- Pagination -->
<!-- Paginator for posts -->
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