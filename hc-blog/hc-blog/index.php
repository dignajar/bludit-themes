<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include(THEME_DIR_PHP.'head.php') ?>
</head>

<body>

	<div class="row">
		<div class="twelve columns">
		<a href="<?php echo $Site->url() ?>"><img src="bl-themes/hc-blog/images/Logo_1486372263538-k.png" align="left"/></a>
		<p align="center"><h2><?php echo $Site->title(); ?></h2></p>
		</div>
	</div>
	
	<div class="row">
		<div class="twelve columns">
			<ul class="nav-bar">
  				<?php
  				  				echo '<li class "active"><a href="'.$Site->homeLink().'">'.$Language->get('Home').'</a></li>';

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
						}

								}
								echo $html;
							?>			</ul>
			
		</div>
	</div>
	
		<div class="row">
		<div class="twelve columns">
			<div class="row">
				<div class="eight columns">
					<h3><?php echo $Site->description() ?></h3>
					<p>
					<?php
            if($Url->whereAmI()=='post') {
                include(THEME_DIR_PHP.'post.php');
            }
            elseif($Url->whereAmI()=='page') {
                include(THEME_DIR_PHP.'page.php');
            }
            else {
                include(THEME_DIR_PHP.'home.php');
            }

        ?>
					</p>
					<hr />					
				</div>
		
				<div class="four columns">
					
					
					<!-- don't mind these, I just added them for fun! -->
					
					<?php include(THEME_DIR_PHP.'sidebar.php');?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
		<hr />
		<p align="center"><?php echo $Site->footer() ?> | <a href="https://www.hawtecanvas.com">by HC</a></p>
		</div>
	</div>
</body>
