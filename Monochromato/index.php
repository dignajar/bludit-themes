<!doctype html>
<html lang="<?php echo $Site->language() ?>">
<head>
<?php include(PATH_THEME_PHP.'head.php') ?>
</head>
<body>
<?php Theme::plugins('siteBodyBegin') ?>
<div class="wrapper">
  <input type="checkbox" id="nav-button" class="nav-button" />
  <label for="nav-button">MENU</label>
  <section class="site-header">
    <?php include(PATH_THEME_PHP.'sidebar.php') ?>
  </section>
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
  <section class="site-footer">
    <p>Monochromato by <a href="http://paulglushak.com">hxii</a></p>
    <p><?php echo $Site->footer() ?></p>
    <p><?php echo $Language->get('Powered by') ?> <a target="_blank" href="http://www.bludit.com">Bludit</a></p>
  </section>
</div>
<?php Theme::plugins('siteBodyEnd') ?>
</body>
</html>