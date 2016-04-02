<section class="medium-12 columns">


	<article class="blog-post">
		
	    <!-- Plugins Page Begin -->
	    <?php Theme::plugins('pageBegin') ?>
	    		
		<h3>
			<a href="<?php echo $Page->permalink() ?>"><?php echo $Page->title() ?></a>
		</h3>
		
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

	</article>	
	
	
</section>