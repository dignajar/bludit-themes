<h1 class="title"><?php echo $Site->title() ?></h1>
<h4 class="slogan"><?php echo $Site->slogan() ?></h4>


<!--<h2 class="subhead"><?php echo $Language->get('Recent posts') ?></h2>-->

<?php foreach ($posts as $Post): ?>

<section class="home post">

    <!-- Post header -->
    <header class="post-header">

        <!-- Post title -->
        <h1 class="post-title">
            <a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a>
        </h1>

        <!-- Post date and author -->
        <div class="post-meta">
            <span class="date"><?php echo $Post->date() ?></span>
            <span class="author">
                <?php
                    echo $Language->get('Posted By').' ';

                    if( Text::isNotEmpty($Post->authorFirstName()) && Text::isNotEmpty($Post->authorLastName()) ) {
                        echo $Post->authorFirstName().', '.$Post->authorLastName();
                    }
                    else {
                        echo $Post->username();
                    }
                ?>
            </span>
        </div>

    </header>

    <!-- Post content -->
    <div class="post-content">
        <?php
            // FALSE to get the first part of the post
            echo $Post->content(false)
        ?>
    </div>

    <?php if($Post->readMore()) { ?>
    <a class="read-more" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more') ?></a>
    <?php } ?>

</section>

<?php endforeach; ?>

<?php
    echo Paginator::html();
?>