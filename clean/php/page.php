	<section class="article static" role="article" id="fh5co-main">

		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php echo $Page->title() ?></h1>
					</div>
				</div>
			</div>
		</div>

		<article id="fh5co-content">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">

					    <!-- Plugins Page Begin -->
					    <?php Theme::plugins('pageBegin') ?>
						
					    <!-- page content -->
					    <div class="page-content">
					        <?php
					            // Cover Image
					            if($Page->coverImage()) {
					                echo '<img class="cover-image" src="'.$Page->coverImage().'" alt="Cover Image">';
					            }
					
					            // Page content
					            echo $Page->content()
					        ?>
					    </div>
						
					    <!-- Plugins Page Begin -->
					    <?php Theme::plugins('pageEnd') ?>	

						</div>
					</div>
				</div>
			</div>
		</article>
		
	</section>