<article class="post">
  <?php Theme::plugins('postBegin') ?>
  <section class="post-header">
    <header class="post-title">
      <h1><?php echo $Post->title() ?></h1>
    </header>
        <div class="post-meta-post">
            <span class="date"><strong><?php echo $Post->date() ?></strong></span>
            <span class="author">
                <?php
                    echo $Language->get('Posted By').' ';

                    if( Text::isNotEmpty($Post->user('firstName')) || Text::isNotEmpty($Post->user('lastName')) ) {
                        echo $Post->user('firstName').' '.$Post->user('lastName');
                    }
                    else {
                        echo $Post->user('username');
                    }
                ?>
            </span>
        </div>
    <hr class="fancy">
  </section>
  <section class="post-content">
    <?php echo $Post->content() ?>
  </section>
  <?php Theme::plugins('postEnd') ?>
</article>
