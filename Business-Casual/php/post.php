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
	                	$author = $Post->username();

				if( Text::isNotEmpty($Post->authorFirstName()) || Text::isNotEmpty($Post->authorLastName()) ) {
					$author = $Post->authorFirstName().' '.$Post->authorLastName();
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