<!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $Site->homeLink() ?>"><?php echo $Site->title() ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
            <?php
                echo '<li><a href="'.$Site->homeLink().'">'.$Language->get('Home').'</a></li>';
                $parents = $pagesParents[NO_PARENT_CHAR];
                foreach($parents as $Parent) {
                    echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
                }
            ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>