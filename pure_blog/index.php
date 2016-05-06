<!doctype html>
<html lang="<?php echo $Site->language() ?>">
<head>

<!-- Meta tags -->
<?php include(PATH_THEME_PHP.'head.php') ?>

</head>
<body>

<!-- Plugins Site Body Begin -->
<?php Theme::plugins('siteBodyBegin') ?>

<!-- Layout -->
<div id="layout" class="pure-g">

    <!-- Sidebar -->
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <?php include(PATH_THEME_PHP.'sidebar.php') ?>
    </div>

    <!-- Main -->
    <div class="content pure-u-1 pure-u-md-3-4">

        <!-- Content -->
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

        <!-- Footer -->
        <div class="footer">
		<div class="pure-menu pure-menu-horizontal">
		<ul>
                        <li class="pure-menu-item"><a target="_blank" href="http://www.bludit.com" class="pure-menu-link">Bludit</a> </li>
		</ul>
        </div>
        </div>

    </div>

</div>

<!-- Plugins Site Body End -->
<?php Theme::plugins('siteBodyEnd') ?>

<!-- copyrights
// author: dave (dawid.stawicki.de@gmail.com)
// template name: pureblog
// version: 1.1
// based on purecss framework
    /copyrights -->
</body>
</html>
