<?php
/*
Template Name: Repeating Content
*/
?>
<?php get_header(); ?>

    <div class="container">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <?php the_content(); ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <?php include('sidebar.php'); ?>
        </div>
    </div>

<?php get_footer(); ?>