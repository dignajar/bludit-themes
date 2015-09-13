<?php

// --- COVER IMAGE ------------------------------------------------------------
// --- by Diego Najar for Bludit ----------------------------------------------

// Default cover image for pages.
$coverImage = HTML_PATH_THEME_IMG.'/page-bg.jpg';

?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo $coverImage ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1><?php echo $Page->title() ?></h1>
                    <hr class="small">
                    <h2 class="subheading"><?php echo $Page->description() ?></h2>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>

    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageBegin') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php echo $Page->content() ?>
            </div>
        </div>
    </div>

    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageEnd') ?>

</article>