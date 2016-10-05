<h1 class="content-subhead"><?php echo $Language->get('Post') ?></h1>

<section class="post">
				    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>
                    <header class="post-header">
                       <img class="post-avatar" height="50" width="50" src="<?php echo $Post->profilePicture() ?>">

                        <h2 class="post-title"><?php echo $Post->title() ?></h2>

                        <p class="post-meta">
                <?php
                    echo $Language->get('Posted By').' ';

                    if( Text::isNotEmpty($Post->user('firstName')) || Text::isNotEmpty($Post->user('lastName')) ) {
                        echo $Post->user('firstName').' '.$Post->user('lastName');
                    }
                    else {
                        echo $Post->user('username');
                    }
                ?>     <?php
			$tags = $Post->tags(true);

			foreach($tags as $tagKey=>$tagName) {
				echo '<a class="post-category post-category-pure" href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
			}
		?>
                         <span class="date"><?php echo $Post->date() ?></span> </p>
                    </header>

                    <div class="post-description">
        <?php
            // Call the method with FALSE to get the first part of the post
            echo $Post->content()
        ?>
		
                    </div>
					    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>
                </section>
