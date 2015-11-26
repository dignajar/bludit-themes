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
			<span class="date"><span class="month"><?php echo $Post->date() ?></span></span>
		
	</header>
	</article>


	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content() ?>

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
			<a href="#" class="author"><span class="name"><?php echo $author ?></span></a>
	</div>

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>

</article>