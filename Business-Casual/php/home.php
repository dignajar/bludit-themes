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
            <a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h2><hr>
           
        </div>

    </header>

    <!-- Post content -->
   <div class="col-lg-12">
        <?php
            // Call the method with FALSE to get the first part of the post
            echo $Post->content(false)
        ?>
    </div><br>


<div class="col-lg-12 text-right">
    <?php if($Post->readMore()) { ?>
    <a class="btn btn-default btn-lg" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more') ?></a>
    <?php } ?>
		<!-- Post's tags -->
	<div class="col-lg-12 text-center">
	<h5><small>
		<strong><?php $Language->p('Tags') ?></strong>
		<?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '&nbsp;|&nbsp <a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
			}
		?>
		</small></h5></li>
	 <!-- Post date and author -->
<h6><small>
            <?php
	                	$author = $Post->username();

				if( Text::isNotEmpty($Post->authorFirstName()) || Text::isNotEmpty($Post->authorLastName()) ) {
					$author = $Post->authorFirstName().' '.$Post->authorLastName();
				}
			?>
			<time><?php echo $Post->date() ?></time>&nbsp;|&nbsp
			<span  div class="name"><?php echo $author ?> </div></span>
		</small></h6>
            
	</div>
	   
	

    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>

</div></div>

<?php endforeach; ?>

<!-- Paginator for posts -->
 <div class="col-lg-12 text-center">
 <ul class="pager">
<?php
    echo Paginator::html();
?>                    </ul>
                </div>
		