<div class="category"><?php echo $Language->get('Recent posts') ?></div>

<?php foreach ($posts as $Post): ?>
 <article class="post">
    <?php Theme::plugins('postBegin') ?>
    <section class="post-header">
      <header class="homepage-post-title">
        <h1><a href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h1>
      </header>
      <div class="post-meta">
        <span class="post-date">on <strong><?php echo $Post->date() ?></strong></span>
      </div>
    </section>

    <!-- Post content -->
    <!-- <div class="post-content">
        <?php
            // Call the method with FALSE to get the first part of the post
            echo $Post->content(false)
        ?>
    </div> -->

    <?php if($Post->readMore()) { ?>
      <a class="read-more" href="<?php echo $Post->permalink() ?>"><?php $Language->printMe('Read more') ?></a>
    <?php } ?>

    <?php Theme::plugins('postEnd') ?>
  </article>
<?php endforeach; ?>

<?php
  echo Paginator::html();
?>
