<?php
	/**
	 * Truncating Text by Word
	**/
	function truncate_words($text, $limit, $ellipsis = '&hellip;') {
	    $words = preg_split("/[\n\r\t ]+/", $text, $limit + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE);
	    if (count($words) > $limit) {
	        end($words); //ignore last element since it contains the rest of the string
	        $last_word = prev($words);
	           
	        $text =  substr($text, 0, $last_word[1] + strlen($last_word[0])) . $ellipsis;
	    }
	    return $text;
	} 
?>	
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php echo $Site->title() ?></h1>
						<p><?php echo $Site->slogan() ?></p>
					</div>
				</div>
			</div>
		</div>



		<div id="fh5co-portfolio">
		<?php  $i=1;
		foreach ($posts as $Post):
				if ($i % 2 == 0) {  ?>

				<div class="fh5co-portfolio-item">
					<div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo DOMAIN.HTML_PATH_THEME ?>img.php?src=<?php echo DOMAIN.$Post->coverImage(); ?>&w=721&h=525&crop-to-fit);"></div>
					<div class="fh5co-portfolio-description">
				    <!-- Plugins Post Begin -->
				    <?php Theme::plugins('postBegin') ?>						
						<h2>
							<a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a>
							<small><?php echo $Post->date() ?></small>
						</h2>
						<p><?php echo $Post->content(false); ?></p>
						
						<?php if($Post->readMore()): ?>
							<p><a href="<?php echo $Post->permalink() ?>" class="btn btn-primary"><?php $Language->printMe('Read more') ?></a></p>
						<?php endif; ?>

				    <!-- Plugins Post End -->
				    <?php Theme::plugins('postEnd') ?>						
					</div>
				</div>
				
			<?php $i=$i+1; 
				} else { 	?>

				<div class="fh5co-portfolio-item fh5co-img-right">
					<div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo DOMAIN.HTML_PATH_THEME ?>img.php?src=<?php echo DOMAIN.$Post->coverImage(); ?>&w=721&h=525&crop-to-fit);"></div>
					<div class="fh5co-portfolio-description">
				    <!-- Plugins Post Begin -->
				    <?php Theme::plugins('postBegin') ?>						
						<h2>
							<a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a>
							<small><?php echo $Post->date() ?></small>
						</h2>
						<p><?php echo $Post->content(false); ?></p>
						
						<?php if($Post->readMore()): ?>
							<p><a href="<?php echo $Post->permalink() ?>" class="btn btn-primary"><?php $Language->printMe('Read more') ?></a></p>
						<?php endif; ?>

				    <!-- Plugins Post End -->
				    <?php Theme::plugins('postEnd') ?>						
					</div>
				</div>
				<?php $i=$i+1;
				}	?>
				
		<?php endforeach; ?>
		
			<!-- Pagination -->
			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2">				
				<ul class="actions pagination">
				<?php
					if( Paginator::get('showNewer') ) {
						echo '<li><a href="'.Paginator::urlPrevPage().'" class="btn"><i class="icon-arrow-with-circle-left"></i> Previous Page</a></li>';
					}
				
					if( Paginator::get('showOlder') ) {
						echo '<li><a href="'.Paginator::urlNextPage().'" class="btn">Next Page <i class="icon-arrow-with-circle-right"></i></a></li>';
					}
				?>
				</ul>
				</div>
			</div>			
				
					
		</div>



		<div id="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<h2 class="section-lead text-center">Leadership</h2>

							<?php
								$users = $dbUsers->getAll();
								foreach($users as $username=>$field):								 
									include(PATH_THEME_PHP.'leadership.php') 
							?>
							<article class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">

								<figure>
									<img src="<?php echo $profilePictureSrc ?>" alt="<?php echo $username ?>" class="img-responsive">
								</figure>
																
														
								<!-- Post's header -->
								<h3><?php echo $field['firstName'] ?> <?php echo $field['lastName'] ?></h3>
								
								<!-- Post's content, the first part if has pagebrake -->
								<p>
									<?php echo $role ?>
									<?php // echo $field['registered'] ?>
								</p>								

								<ul class="fh5co-social">
									<?php echo $twitter ?>
									<?php echo $facebook ?>
									<?php echo $googlePlus ?>
								</ul> 	
							
							</article>
							<?php endforeach; ?>
 							
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div id="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">

							<h2 class="section-lead text-center"><?php echo $Language->get('Recent posts') ?></h2>

							<?php 
								$i = 0;
								foreach ($posts as $Post): 
									if ($i++ > 4) break; 
							?>
							
							<article class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service to-animate">
								
								<!-- Cover image -->
								<figure class="fh5co-icon to-animate">
								<img src="<?php echo DOMAIN.HTML_PATH_THEME ?>img.php?src=<?php echo DOMAIN.$Post->coverImage(); ?>&w=72&h=52&crop-to-fit" alt="Cover Image" class="img-responsive">
								</figure>
															
								<!-- Plugins Post Begin -->
								<?php Theme::plugins('postBegin') ?>
									
								<div class="fh5co-desc">
									<!-- Post's title -->
									<h3><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h3>
									<!-- Post's content, the first part if has pagebrake -->
									<p><?php echo truncate_words($Post->content(false), 10) ?></p>	
								</div>		
																															
								<!-- Plugins Post End -->
								<?php Theme::plugins('postEnd') ?>
							
							</article>
							
							<?php $i +=1;
								endforeach; ?>		
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>