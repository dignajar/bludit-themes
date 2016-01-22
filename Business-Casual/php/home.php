 <!-- <h2 class="subhead"><?php echo $Language->get('Recent posts') ?></h2>-->

<?php foreach ($posts as $Post): ?>

  <div class="container">
  <div class="box">
  <div class="col-lg-12 text-center">
    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>

    <!-- Post header -->
    <header class="post-header">

        <!-- Post title -->
        <h2 class="post-title">
           <hr> <a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h2>
                   <h4><small><?php echo $Post->description() ?></small></h4><hr>
				   </div>

    </header>
<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="image featured"><img src="'.$Post->coverImage().'" alt="Cover Image"></a>';
		}
	?>
    <!-- Post content -->
   <div class="col-lg-12">
           <?php
            // Call the method with FALSE to get the first part of the post
            echo $Post->content(false)
        ?>
    </div>

<p>&nbsp;</p>
	<div class="col-md-6 text-left">
	<!-- Post tag -->
  <h5>
  <small>
		<strong><?php $Language->p('Tags') ?></strong>
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '&nbsp;|&nbsp <a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
			}
		?>
		</small>
		</h5>
			 <!-- Post date and author -->
		<h6>
		<small>
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
			<time><?php echo $Post->date() ?></time>&nbsp;|&nbsp
			<span  class="name"><?php echo $author ?></span>
		</small>
		</h6>
		</div>
			<!-- Post read more -->
  <div class="col-md-6 text-right">
				    <?php if($Post->readMore()) { ?>
    <a class="btn btn-default btn-lg" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more') ?></a>
    <?php } ?>
	</div>
	
	
	
    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>

</div></div>

<?php endforeach; ?>

<!-- Paginator for posts -->

 <div class="container">
 <div class="col-lg-12 text-center">
 <ul class="pager">
<?php
    echo Paginator::html();
?>                   
</ul>
</div>
</div>
		