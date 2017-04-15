<!DOCTYPE html>
<html lang="<?php echo $Site->language() ?>">
<head>

<!-- Meta tags -->
<?php include(PATH_THEME_PHP.'head.php') ?>

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
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo"><?php echo $Site->title() ?></span>
				</div>
				<nav id="navbar-1" class="navbar item-nav navbar-right">
	            <ul>
		            <?php
		            echo '<li><a href="'.$Site->homeLink().'">'.$Language->get('Home').'</a></li>';
		            $parents = $pagesParents[NO_PARENT_CHAR];
		            foreach($parents as $Parent) {
		                if( $Parent->published() ) {
		                echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
		            }}
		            ?>
	            </ul>
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
			    	<p class="p-intro"><?php echo ( Text::isNotEmpty($Site->slogan()) ) ? $Site->slogan() : 'Welcome to the machine'; ?></p>
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
		</div>
	</div>

	<footer>
		<div class="container">
		<p class="text-centered foot-cp"><?php echo $Site->footer() ?> | <a href="https://twitter.com/flamekaizar">handcrafted by @flamekaizar</a></p>
		</div>
	</footer>

	<!-- Javascript -->
	<?php
		Theme::jquery();
		Theme::javascript('kube.min.js');
	?>

	<!-- Plugins Site Body Begin -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>
