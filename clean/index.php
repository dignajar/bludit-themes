<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>	
	<!-- Include HTML meta tags -->
	<?php include(PATH_THEME_PHP.'head.php') ?>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo HTML_PATH_THEME ?>js/respond.min.js"></script>
	<![endif]-->	
</head>
<body>
	
	
	<!-- Header -->
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="navbar-header"> 
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="<?php echo $Site->homeLink() ?>" title="<?php echo $Site->slogan() ?>"><?php echo $Site->title() ?></a>
						</div>
						<div id="fh5co-navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
							<?php
								$html = '';
								$parents = $pagesParents[NO_PARENT_CHAR];
								foreach($parents as $parent)
								{
									// Check if the parent is published
									if( $parent->published() )
									{
										// Print the parent
										$html .= '<li'.( ($parent->key()==$Url->slug())?' class="active"':'').'>';
										$html .= '<a href="'.$parent->permalink().'">'.$parent->title().'</a>';
						
										// Check if the parent has children
										if(isset($pagesParents[$parent->key()]))
										{
											$children = $pagesParents[$parent->key()];
						
											// Print children
											$html .= '<ul class="submenu menu vertical" data-submenu>';
											foreach($children as $child)
											{
												// Check if the child is published
												if( $child->published() )
												{
													$html .= '<li'.( ($child->key()==$Url->slug())?' class="active"':'').'>';
													$html .= '<a href="'.$child->permalink().'">'.$child->title().'</a>';
													$html .= '</li>';
												}
											}
											$html .= '</ul>';
										}
									}
								}
								echo $html;
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
		
		
	<!-- Main -->
	<main id="fh5co-main">
		
		<?php
			if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') )
			{
			    include(PATH_THEME_PHP.'home.php');
			}
			elseif($Url->whereAmI()=='post')
			{
			    include(PATH_THEME_PHP.'post.php');
			}
			elseif($Url->whereAmI()=='page')
			{
				$template = PATH_THEME_PHP. $Page->slug(). '.php';
				if(file_exists($template))
					include_once($template);
				else 
					include(PATH_THEME_PHP.'page.php');				    
			}
		?>

	</main>
	

	<!-- Footer -->
	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<?php echo $Site->footer() ?><br /> 
					Design par <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a>.&nbsp;
					Powered by <a href="http://www.bludit.com">Bludit</a>.
				</div>
			</div>
		</div>
	</footer>
	
	<!-- jQuery -->
	<?php Theme::jquery() ?>
	<!-- Scripts -->
	<?php include(PATH_THEME_PHP.'foot.php') ?>
	<!-- Plugins Site Body End -->
	<?php Theme::plugins('siteBodyEnd') ?>	
</body>
</html>