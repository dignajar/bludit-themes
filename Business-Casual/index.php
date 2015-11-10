<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $Site->title() ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Include Meta tags -->
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
