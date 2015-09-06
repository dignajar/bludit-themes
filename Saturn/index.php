<!DOCTYPE html>
<html lang="<?php echo $Site->language() ?>">
<head>

<!-- Meta tags -->
<?php include('php/head.php') ?>

</head>
<body>

<!-- Plugins Site Body Begin -->
<?php Theme::plugins('siteBodyBegin') ?>

	<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<nav class="navbar logo-w navbar-left" >
					<a class="logo" href="<?php echo $Site->homeLink() ?>"><?php echo $Site->title() ?></a>
				</nav>

				<nav id="navbar-1" class="navbar item-nav navbar-right">
				<?php echo $plugins['all']['pluginPages']->siteSidebar() ?>
				</nav>
			</header>
		</div>
	</div>

	<!-- Introduction -->
	<div class="intro">
		<div class="container">
			<div class="units-row">
			    <div class="unit-10">
			    	<img class="img-intro" src="<?php echo HTML_PATH_THEME.'img/avatar.png' ?>" alt="">
			    </div>
			    <div class="unit-90">
			    	<p class="p-intro"><?php echo $Site->description() ?></p>
			    </div>
			</div>
		</div>
	</div>

	<!-- Content -->
	<div class="content">
		<div class="container">
	        <?php
	            if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') )
	            {
	                include('php/home.php');
	            }
	            elseif($Url->whereAmI()=='post')
	            {
	                include('php/post.php');
	            }
	            elseif($Url->whereAmI()=='page')
	            {
	                include('php/page.php');
	            }
	        ?>
		</div>
	</div>

	<footer>
	<div class="container">
	<p class="text-centered foot-cp"><?php echo $Site->footer() ?> | <a href="http://afnizar.com">handcrafted by @flamekaizar</a></p>
	</div>
	</footer>

<!-- Javascript -->
<?php
Theme::javascript(array(
	'jquery.min.js',
	'kube.min.js'
));
?>

</body>
</html>