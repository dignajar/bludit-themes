<!DOCTYPE html>
<html lang="en">

<head>
<?php include(PATH_THEME_PHP.'head.php') ?>
</head>

<body>
<?php Theme::plugins('siteBodyBegin') ?>
    <div class="brand"><?php echo $Site->title() ?></div>
    <div class="address-bar"><?php echo $Site->slogan() ?></div>

    <!-- Navigation -->
    <?php include(PATH_THEME_PHP.'navbar.php') ?>
 
    <div class="container">

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
        ?>   </div>
		

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <p><?php echo $Site->footer() ?> | <?php echo $Language->get('Powered by') ?> <a target="_blank" href="http://www.bludit.com">Bludit</a></p>
                </div>
            </div>
        </div>
    </footer>
	<!-- Plugins Site Body End -->
<?php Theme::plugins('siteBodyEnd') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
	
	    <!-- Bootstrap Core JavaScript -->
    <?php Theme::javascript('bootstrap.min.js') ?>

</body>

</html>
