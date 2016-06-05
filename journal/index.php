<!DOCTYPE HTML>
<html>
<head>
<!-- Include HTML meta tags -->
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>
<body>
	<div class="grid grid-fluid">
		<!-- Header -->
		<header id="header">
			<!-- Intro -->
			<section id="intro">
				<header>
					<h1><a href="<?php echo $Site->url() ?>"><?php echo $Site->title() ?></a></h1>
					<span><?php echo $Site->slogan() ?></span>
				</header>
			</section>
			
			<nav class="links">
				<ul>
				<!-- Add Home Shortcut in Navigation Menu -->
				<li><a href="<?php echo $Site->url() ?>">Home</a></li>
				
				<?php
					$parents = $pagesParentsPublished[NO_PARENT_CHAR];
					foreach($parents as $Parent) {
						echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
					}
				?>
				
				<!-- Extra TAGS shortcut in Navigation Menu -->
				<li><a href="#goToTags">Tags</a></li>
				</ul>
			</nav>
		</header>

		<div id="main" class="">
			<?php
			    if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') )
			    {
			        include(THEME_DIR_PHP.'home.php');
			    }
			    elseif($Url->whereAmI()=='post')
			    {
			        include(THEME_DIR_PHP.'post.php');
			    }
			    elseif($Url->whereAmI()=='page')
			    {
			        include(THEME_DIR_PHP.'page.php');
			    }
			?>
		</div>
	</div>
	
	<!-- footerSection -->
		<section id="footerSection">
			<?php include(THEME_DIR_PHP.'footer.php') ?>
		</section>
	

	<!-- Scripts! Add Javascript files here if needed. -->
	
	<!-- Plugins Site Body End -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>