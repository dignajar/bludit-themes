<!DOCTYPE html>
<html lang="<?php echo $Site->language() ?>" class="no-js">
<head>
<?php include(PATH_THEME_PHP.'head.php') ?>
</head>
<body>
<!-- Plugins Site Body Begin -->
<?php Theme::plugins('siteBodyBegin') ?>
<main>
  <!-- Layout -->
  <div class="header">
    <div class="grid grid-pad">
      <div class="col-s-1-1 col-m-1-1 col-w-1-1">
        <a href="<?php echo $Site->url() ?>"><h1><?php echo $Site->title() ?></h1></a>
      </div>
    </div>
  </div>
  <!-- Content -->
  <div class="grid grid-pad">
    <div class="col-s-1-1 col-m-1-1 col-w-1-1">
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
        include(PATH_THEME_PHP.'page.php');
      }
    ?>
    </div>
  </div>
  <!-- Footer -->
  <div class="grid grid-pad">
    <div class="col-s-1-1 col-m-1-1 col-w-1-1">
      <ul class="footer-nav">
        <li class="active"><a href="<?php echo $Site->url() ?>">Home</a></li>
        <?php
        $parents = $pagesParents[NO_PARENT_CHAR];
        foreach($parents as $Parent) {
          echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="grid grid-pad">
    <div class="col-s-1-1 col-m-1-1 col-w-1-1">
      <div class="footer">
        <p><?php echo $Site->footer() ?> | <?php echo $Language->get('Powered by') ?> <a target="_blank"  href="http://www.bludit.com">Bludit</a></p>
      </div>
    </div>
  </div>
</main>
<!-- Navigation -->
	<a href="#cd-nav" class="cd-nav-trigger">Menu
		<span class="cd-nav-icon"></span>
		<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
			<circle fill="transparent" stroke="#F7F7F7" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
		</svg>
	</a>
	<div id="cd-nav" class="cd-nav">
		<div class="cd-navigation-wrapper">
			<div class="cd-half-block">
				<h2>Navigation</h2>
				<nav>
					<ul class="cd-primary-nav">
						<li class="active"><a href="<?php echo $Site->url() ?>">Home</a></li>
            <?php
            $parents = $pagesParents[NO_PARENT_CHAR];
            foreach($parents as $Parent) {
              echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
            }
            ?>
					</ul>
				</nav>
			</div>
			<div class="cd-half-block">
        <div class="sidebar">
          <?php include(PATH_THEME_PHP.'sidebar.php') ?>
        </div>
        <ul class="login">
          <li><a href="<?php echo $Site->url().'admin/' ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
			</div>
		</div>
	</div>
<!-- Plugins Site Body End -->
<?php Theme::plugins('siteBodyEnd') ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo HTML_PATH_THEME ?>js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="<?php echo HTML_PATH_THEME ?>js/aqua.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <!-- <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script> -->

</body>
</html>
