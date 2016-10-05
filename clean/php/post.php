	<article class="article" role="article" id="fh5co-main">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php echo $Post->title() ?></h1>
						<small>
						<?php echo $Post->date() ?> - 
						<?php
						    echo $Language->get('Posted By').' ';
						
						    if( Text::isNotEmpty($Post->user('firstName')) || Text::isNotEmpty($Post->user('lastName')) ) {
						        echo $Post->user('firstName').' '.$Post->user('lastName');
						    } else {
						        echo $Post->user('username');
						    }
						?>
						</small>
					</div>
				</div>
			</div>
		</div>
		
	    
		<div id="fh5co-content">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							
							<?php include(PATH_THEME_PHP.'sidebar.php'); ?>
							
							<div class="col-md-9 col-md-pull-3">
						    <!-- Plugins Post Begin -->
						    <?php Theme::plugins('postBegin');
						        // Cover Image
						        if($Post->coverImage()) {
						            echo '<img class="thumbnail" src="' .DOMAIN.HTML_PATH_THEME. 'img.php?src=' .DOMAIN.$Post->coverImage(). '&w=620&crop-to-fit" alt="Cover Image"><br />';
						        }
						
						        // Call the method with FALSE to get the first part of the post
						        echo $Post->content();
						    ?>

						    <!-- Plugins Post End -->
						    <?php Theme::plugins('postEnd') ?>														        				
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>