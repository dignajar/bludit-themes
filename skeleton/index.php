<!doctype html>
<html lang="<?php echo $Site->language() ?>">
<head>

<!-- Meta tags -->
<?php include('php/head.php') ?>

</head>
<body>

<!-- Plugins -->
<?php Theme::plugins('onSiteBodyBegin') ?>

<!-- Layout -->
<div id="layout" class="container">

    <!-- Sidebar -->
    <nav class="one-third column">
        <?php include('php/sidebar.php') ?>
    </nav>


    <!-- Main -->
    <div class="content two-thirds column">

        <!-- Content -->
        <?php
            if($Url->whereAmI()=='home')
            {
                include('php/home.php');
            }
            elseif($Url->whereAmI()=='post')
            {
                include('php/post.php');
            }
            elseif($Url->whereAmI()=='page')
            {
                include('php/page.php');
            }
        ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p><?php echo $Site->footer(); ?> | <?php echo $Language->get('Powered by') ?> <a target="_blank" href="http://www.bludit.com">Bludit</a></p>
    </div>

</div>


<!-- Plugins -->
<?php Theme::plugins('onSiteBodyEnd') ?>

</body>
</html>