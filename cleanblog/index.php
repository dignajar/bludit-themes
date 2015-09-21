<!DOCTYPE html>
<html lang="<?php echo $Site->language() ?>">
<head>
<!-- Include Meta tags -->
<?php include(PATH_THEME_PHP.'head.php') ?>
</head>
<body>

    <!-- Plugins Site Body Begin -->
    <?php Theme::plugins('siteBodyBegin') ?>

    <!-- Include Navbar -->
    <?php include(PATH_THEME_PHP.'navbar.php') ?>

    <!-- Content -->
    <?php
        if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') )
        {
            include(PATH_THEME_PHP.'home.php');
        }
        elseif($Url->whereAmI()=='post')
        {
            include(PATH_THEME_PHP.'post.php');
        }
        elseif($Url->whereAmI()=='page')
        {
            include(PATH_THEME_PHP.'page.php');
        }
    ?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted"><?php echo $Site->footer() ?> | <?php echo $Language->get('Powered by') ?> <a target="_blank" href="http://www.bludit.com">Bludit</a> | Design by <a target="_blank" href="http://startbootstrap.com/">Startbootstrap</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <?php Theme::javascript('jquery.min.js') ?>

    <!-- Bootstrap Core JavaScript -->
    <?php Theme::javascript('bootstrap.min.js') ?>

    <!-- Custom Theme JavaScript -->
    <?php Theme::javascript('clean-blog.min.js') ?>

    <!-- Plugins Site Body End -->
    <?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>