<article class="post">

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Post's header -->
<article class="box post post-excerpt">
	<header>
					<h2><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h2>
			<p><?php echo $Post->description() ?></p>
		
		<div class="info">
	                
					<?php
	                	// Author
	                	$author = $Post->username();

				if( Text::isNotEmpty($Post->authorFirstName()) || Text::isNotEmpty($Post->authorLastName()) ) {
					$author = $Post->authorFirstName().' '.$Post->authorLastName();
				}
			?>
			<span class="date"><span class="month"><?php echo date('M') ?></span> <span class="day"><?php echo date('j') ?></span><span class="year">,<?php echo date('Y') ?></span></span>

		</div>
	</header>
	</article>


	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content() ?>

	<!-- Post's footer -->
	
		<!-- Post's tags -->
		<strong><?php $Language->p('Tags') ?></strong>
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '&nbsp;|&nbsp <a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
			}
		?>
	

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

</article>