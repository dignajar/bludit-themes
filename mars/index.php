<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <!-- Meta tag Title -->
    <title><?php echo $Site->title() ?></title>

    <!-- CSS -->
    <?php Theme::css('blog.css') ?>

    <!-- Javascript -->
    <?php Theme::javascript('blog.js') ?>

    <!-- Plugins site head -->
    <?php Theme::plugins('siteHead') ?>
</head>
<body>
    <!-- Plugins site body begin -->
    <?php Theme::plugins('siteBodyBegin') ?>

    <!-- Site Title -->
    <h1><?php echo $Site->title() ?></h1>

    <?php
        if( $Url->whereAmI()=='home' ) {

            foreach($posts as $Post) {
                echo '<h2>'.$Post->title().'</h2>';
                echo '<div>'.$Post->content().'</div>';
                echo '<hr>';
            }

        }
        elseif($Url->whereAmI()=='post') {

            echo '<h2>'.$Post->title().'</h2>';
            echo '<div>'.$Post->content().'</div>';

        }
        elseif($Url->whereAmI()=='page') {

            echo '<h2>'.$Page->title().'</h2>';
            echo '<div>'.$Page->content().'</div>';

        }
    ?>

    <!-- Plugins site body end -->
    <?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>