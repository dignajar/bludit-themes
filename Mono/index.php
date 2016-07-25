<!doctype html>
<html lang="<?php  echo $Site->language()  ?>">
<head>
<?php  include(PATH_THEME_PHP.'head.php')  ?>
</head>
<body>
<?php  Theme::plugins('siteBodyBegin')  ?>

<!-- Main Wrapper -->
<div class="wrapper">
  <input type="checkbox" id="nav-button" class="nav-button" />
  <label for="nav-button">MENU</label>
  <section class="site-header">
    <?php  include(PATH_THEME_PHP.'sidebar.php')  ?>
  </section>

  <?php

	if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') )    {
		include(PATH_THEME_PHP.'home.php');
	}

	elseif($Url->whereAmI()=='post')    {
		include(PATH_THEME_PHP.'post.php');
	}

	elseif($Url->whereAmI()=='page')    {
		include(PATH_THEME_PHP.'page.php');
	}

	?>

</div>

<!-- Site Footer -->
  <div class="site-footer">
    <hr>
    <p> <?php  echo $Site->footer()  ?> // <?php  echo $Language->get('Powered by')  ?> <a target="_blank" href="https://www.bludit.com">Bludit</a> // Made with <span class="love">♥</span> in 🇨🇦 // </p>
  </div>

<!-- Smooth Scroll -->
  <script>
    smoothScroll.init();
  </script>

<?php  Theme::plugins('siteBodyEnd')  ?>
</body>
</html>
