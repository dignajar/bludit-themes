 <!-- <h1 class="subhead"><?php echo $Language->get('Post') ?></h1>-->

  <div class="container">
  <div class="box">
  <div class="col-lg-12 text-center">

    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>

    <!-- Post header -->
    <header class="post-header">

        <!-- Post title -->
        <h2 class="post-title">
            <hr><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a>
       <h4><small><?php echo $Post->description() ?></small></h4><hr>  </h2>
        </div>
			
    </header>
<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="image featured"><img src="'.$Post->coverImage().'" alt="Cover Image"></a>';
		}
	?>
    <!-- Post content -->
    <div class="col-lg-12  ">
        <?php echo $Post->content() ?>
		</div>
		<!-- Post's tags -->
<p>&nbsp;</p>
	<div class="col-md-6 text-left">
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
	                	$User = $Post->user();
	                	$author = $User->username();
				if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
					$author = $User->firstName().' '.$User->lastName();
				}
			?>
			<time><?php echo $Post->date() ?></time>&nbsp;|&nbsp
			<span  class="name"><?php echo $author ?></span>
		</small>
		</h6>
		</div>
    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>
</div></div>
</section>