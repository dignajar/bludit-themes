<!-- <h1 class="subhead"><?php echo $Language->get('Page') ?></h1>
 -->
<section class="page">

    <!-- page header -->
    <header class="page-header">

        <!-- page title -->
        <h1 class="page-title">
            <?php echo $Page->title() ?>
        </h1>


    </header>

    <!-- page content -->
    <div class="page-content">
        <?php echo $Page->content() ?>
    </div>

</section>