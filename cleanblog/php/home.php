<?php

// --- COVER IMAGE ------------------------------------------------------------
// --- by Diego Najar for Bludit ----------------------------------------------

// Default cover image for homepage.
$coverImage = HTML_PATH_THEME_IMG.'/home-bg.jpg';

// Check module DOM if installed.
if( extension_loaded('dom') && isset($posts[0]) )
{
    $Post = $posts[0];
    $dom = new DOMDocument();
    $dom->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">'.$Post->content());
    $finder = new DomXPath($dom);
    $classname = "bludit-img-justify";
    $images = $finder->query("//*[contains(@class, '$classname')]");

    if($images->length>0) {
        // First image from the list
        $image = $images->item(0);
        // Get value from attribute src
        $coverImage = $image->getAttribute('src');
        // Remove the image from the content
        $image->parentNode->removeChild($image);
        // Set the new content without the image
        $Post->setField('content', $dom->saveHTML(), true);
    }
}
?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo $coverImage ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php echo $Site->title() ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php echo $Post->description() ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <!-- Foreach post -->
            <?php foreach ($posts as $Post): ?>

                <!-- Plugins Post Begin -->
                <?php Theme::plugins('postBegin') ?>

                <div class="post-preview">
                    <a href="<?php echo $Post->permalink() ?>">
                        <h2 class="post-title"><?php echo $Post->title() ?></h2>
                        <h3 class="post-subtitle"><?php echo $Post->description() ?></h3>
                    </a>
                    <p class="post-meta"><?php echo $Language->g('Posted By').' '.$Post->user('username').' '.$Post->date() ?></p>
                </div>

                <!-- Plugins Post End -->
                <?php Theme::plugins('postEnd') ?>

                <hr>

            <?php endforeach; ?>

            <!-- Pager -->
            <ul class="pager">
            <?php
                if( Paginator::get('showNewer') ) {
                    echo '<li class="previous"><a href="'.HTML_PATH_ROOT.'?page='.Paginator::get('prevPage').'">Previous</a></li>';
                }

                if( Paginator::get('showOlder') ) {
                    echo '<li class="next"><a href="'.HTML_PATH_ROOT.'?page='.Paginator::get('nextPage').'">Next</a></li>';
                }
            ?>
            </ul>

        </div>
    </div>
</div>