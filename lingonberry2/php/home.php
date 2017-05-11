<div class="content section-inner">
	<div class="posts">
	<?php foreach($posts as $Post): ?>
		<div class="post format-standard">
			<div class="post-bubbles">
				<a href="<?php echo $Post->permalink() ?>" class="format-bubble" title="<?php echo $Post->title() ?>"></a>
			</div>
			<div class="content-inner">
				<div class="post-header">
				
					<?php if($Post->coverImage()) {
							echo '<div class="featured-media">';
							echo	'<a href="'.$Post->permalink().'" rel="bookmark" title="'.$Post->title().'">';
							echo		'<img class="attachment-post-image wp-post-image cover-image" src="'.$Post->coverImage().'" alt="Cover Image">';
							echo		'<div class="media-caption-container">';
							echo			'<p class="media-caption">'.$Post->description().'</p>';
							echo		'</div>';
							echo	'</a>';
							echo '</div> <!-- /featured-media -->';
						} ?>
					
					<h2 class="post-title"><a href="<?php echo $Post->permalink() ?>" rel="bookmark" title="<?php echo $Post->title() ?>"><?php echo $Post->title() ?></a></h2>
					<div class="post-meta">

						<span class="post-date"><a href="<?php echo $Post->permalink() ?>" title="<?php echo $Post->date() ?>"><?php echo $Post->date() ?></a></span>
												
					</div>
				</div>
				
				<div class="post-content">
					<?php echo $Post->content(false) ?>
					
					<?php if($Post->readMore()) { ?>
						<a class="read-more" style="font-weight:bold;" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more &raquo;') ?></a>
					<?php } ?>
					
				</div>
				<div class="clear"></div>				
			</div>
			<div class="clear"></div>
			<div class="clear"></div>
		</div>
		<?php endforeach; ?>
		
		<div class="post-nav archive-nav">
			<?php echo Paginator::html(); ?>
		</div>
		
		<div class="clear"></div>
	</div>
</div>

