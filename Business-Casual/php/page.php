<!--<h1 class="subhead"><?php echo $Language->get('Page') ?></h1>-->

 <div class="container">
  <div class="box">
  <div class="col-lg-12 text-center">
    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageBegin') ?>

    <!-- page header -->
    <header class="page-header">

        <!-- page title -->
        <h2 class="page-title">
            <a href="<?php echo $Page->permalink() ?>"><?php echo $Page->title() ?></a>
        </h2>

    </header>

    <!-- page content -->
      <div class="col-lg-12 text-left">
        <?php echo $Page->content() ?>
    </div>

    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageEnd') ?>

 </div> </div> </div>