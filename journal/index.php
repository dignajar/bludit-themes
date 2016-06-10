<!DOCTYPE html>
<html>
<head>
<!-- Include HTML meta tags -->
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>
<body>
	<div class="grid grid-fluid bodyLayout">
		<!-- Header -->
		<header id="header">
			<!-- Intro -->
			<section id="intro">
				<header>
					<h1><a href="<?php echo $Site->url() ?>"><?php echo $Site->title() ?></a></h1>
					<span><?php echo $Site->slogan() ?></span>
				</header>
			</section>
			
			<!-- Navigation -->
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
				
				<!-- Add Tags Shortcut in Navigation Menu -->
				<li><a href="#footer">Tags</a></li>
				</ul>
			</nav>
		</header>

		<!-- Content -->
		<div id="content" class="grid"> <!-- content id is currently unused -->
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
			
		<!-- Footer  -->
		<section id="footer">
			<?php include(THEME_DIR_PHP.'footer.php') ?>
		</section>
		
	</div>
	
	<!-- Scripts! Add Javascript files here if needed. -->
	
	<!-- Plugins Site Body End -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>