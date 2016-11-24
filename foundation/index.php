<!DOCTYPE HTML>
<html>
<head>
<!-- Include HTML meta tags -->
<?php include(PATH_THEME_PHP.'head.php') ?>
</head>
<body>

	<!-- Toggle Menu -->
	<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
	  <button class="menu-icon" type="button" data-toggle></button>	
	  <div class="title-bar-title">Menu</div>
	</div>
	
	
	<!-- Header -->
	<header class="top-bar" id="main-menu">
	
	  <nav class="top-bar-left">	
	    <ul class="dropdown menu" data-dropdown-menu>
	      <li class="menu-text"><?php echo $Site->title() ?></li>
	    </ul>	
	  </nav>
	
	  <nav class="top-bar-right">
	    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
			
			<?php
				$html = '<li><a'.( ($Url->whereAmI()=='home')?' class="active"':'').' href="'.$Site->homeLink().'">'.$Language->get('Home').'</a></li>';
				$parents = $pagesParents[NO_PARENT_CHAR];
				foreach($parents as $parent)
				{
					// Check if the parent is published
					if( $parent->published() )
					{
						// Print the parent
						$html .= '<li>';
						$html .= '<a'.( ($parent->key()==$Url->slug())?' class="active"':'').' href="'.$parent->permalink().'">'.$parent->title().'</a>';
		
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
									$html .= '<li>';
									$html .= '<a'.( ($child->key()==$Url->slug())?' class="active"':'').' href="'.$child->permalink().'">'.$child->title().'</a>';
									$html .= '</li>';
								}
							}
							$html .= '</ul>';
						}
					}
				}
				
				if($Login->role()!=='admin')
					$html .= '<li><a href="' .$Site->url(). 'admin/" class="small button">' .$Language->get('Login'). '</a></li>';
				else
					$html .= '<li><a href="' .$Site->url(). 'admin/logout" class="small alert button">' .$Language->get('Logout'). '</a></li>';
				
				echo $html;
				// OPTIONAL LOGIN BUTTON
			?>		    
	    </ul>
	  </nav>
	
	</header>
		
	<?php if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') ): ?>
	<section class="callout large primary">
		<div class="row column text-center">
			<h1><?php echo $Language->get('Recent posts') ?></h1>
		</div>
	</section>
	<?php elseif( ($Url->whereAmI()=='post') ): ?>
	<section class="callout large primary">
		<div class="row column text-center">
			<h1><?php echo $Language->get('Post') ?></h1>
		</div>
	</section>
	<?php elseif( ($Url->whereAmI()=='page') ): ?>
	<section class="callout large primary">
		<div class="row column text-center">
			<h1><?php echo $Language->get('Page') ?></h1>
		</div>
	</section>			
	<?php endif; ?>	
		
	<!-- Main -->
	<main class="row" id="content">

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

	<footer class="footer">
	
	  <div class="row">
	
	    <div class="small-12 columns">
	
	      <p class="slogan"><?php echo $Site->slogan() ?></p>
	
	      <p class="links">
			<?php
				$parents = $pagesParents[NO_PARENT_CHAR];
				foreach($parents as $Parent) {
					echo '<a href="'.$Parent->permalink().'">'.$Parent->title().'</a>';
				}
			?>
	      </p>
	
	      <p class="copywrite"><?php echo $Site->footer() ?> | <a href="http://www.bludit.com">Bludit</a></p>
	
	    </div>
	
	  </div>
	
	</footer>
	
	<!-- Scripts -->
	<?php Theme::jquery() ?>
	<script src="<?php echo HTML_PATH_THEME ?>js/vendor/jquery.min.js"></script>
	<script src="<?php echo HTML_PATH_THEME ?>js/vendor/what-input.min.js"></script>
	<script src="<?php echo HTML_PATH_THEME ?>js/foundation.min.js"></script>
	<script src="<?php echo HTML_PATH_THEME ?>js/app.js"></script>
	<!-- Plugins Site Body End -->
	<?php Theme::plugins('siteBodyEnd') ?>	
</body>
</html>
