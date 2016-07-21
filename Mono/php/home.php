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
    <?php Theme::plugins('postEnd') ?>
  </article>
<?php endforeach; ?>

<?php
  echo Paginator::html();
?>
