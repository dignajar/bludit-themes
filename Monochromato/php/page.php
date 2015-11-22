 <article class="post">
    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageBegin') ?>
    <section class="post-header">
      <header class="post-title">
        <h1><?php echo $Page->title() ?></h1>
      </header>
    </section>
    <section class="post-content">
	<?php echo $Page->content() ?>
    </section>
    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageEnd') ?>
  </article>