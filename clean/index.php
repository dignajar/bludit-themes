<!DOCTYPE HTML>
<html>
<!-- HTML <head>...</head> -->
<?php include(PATH_THEME_PHP.'head.php') ?>
<body>

<header id="fh5co-header" role="banner">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="<?php echo DOMAIN_BASE ?>"><?php echo $Site->title() ?></a>
					</div>

					<div id="fh5co-navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo DOMAIN_BASE ?>"><span>Home <span class="border"></span></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- END .header -->


<div id="fh5co-main">
	<div class="fh5co-intro text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<?php
					if($Url->whereAmI()=='page')
					{
						echo '<h1 class="intro-lead">'.$Page->title().'</h1>';
					}
					else
					{
						echo '<h1 class="intro-lead">'.$Site->description().'</h1>';
						echo '<p>'.$Site->slogan().'</p>';
					}
				?>
				</div>
			</div>
		</div>
	</div>

        <!-- Content -->
        <?php
            if( $Url->whereAmI()=='home' )
            {
                include(PATH_THEME_PHP.'home.php');
            }
            elseif($Url->whereAmI()=='page')
            {
                include(PATH_THEME_PHP.'page.php');
            }
        ?>

</div>

<footer id="fh5co-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<p><?php echo $Site->footer() ?><br>Design by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> - Powered by <a href="http://www.bludit.com/" target="_blank">BLUDIT</a></p>
			</div>
		</div>
	</div>
</footer>

<!-- jQuery -->
<script src="<?php echo DOMAIN_THEME_JS.'jquery.min.js' ?>"></script>
<!-- jQuery Easing -->
<script src="<?php echo DOMAIN_THEME_JS.'jquery.easing.1.3.js' ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo DOMAIN_THEME_JS.'bootstrap.min.js' ?>"></script>
<!-- Waypoints -->
<script src="<?php echo DOMAIN_THEME_JS.'jquery.waypoints.min.js' ?>"></script>
<!-- Main JS -->
<script src="<?php echo DOMAIN_THEME_JS.'main.js' ?>"></script>

</body>
</html>