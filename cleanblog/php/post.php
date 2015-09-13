<?php

// --- COVER IMAGE ------------------------------------------------------------
// --- by Diego Najar for Bludit ----------------------------------------------

// Default cover image for posts.
$coverImage = HTML_PATH_THEME_IMG.'/post-bg.jpg';

// Check module DOM if installed.
if(extension_loaded('dom'))
{
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
                <div class="post-heading">
                    <h1><?php echo $Post->title() ?></h1>
                    <h2 class="subheading"><?php echo $Post->description() ?></h2>
                    <span class="meta"><?php echo $Language->g('Posted By').' '.$Post->username().' '.$Post->date() ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>

    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php echo $Post->content() ?>
            </div>
        </div>
    </div>

    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>

</article>