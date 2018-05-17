<?php
    $all_fields = get_fields();
    if (!$all_fields['content_block']) {
        genesis();
        exit();
    }

    /*
        Template Name: Repeat Content Home Page
    */
    get_header();

?>

<div class="row">

    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="block_description">
            <?php echo $all_fields['page_into']; ?>
            <hr>
        </div>
        <?php
        if ( is_array ($all_fields) ) {
            foreach ($all_fields['content_block'] as $key => $all_field) {
                ?>
                <h2 class="block_title"><?php echo $all_field['title']; ?></h2>
                <div class="block_description"><?php if ($all_field['image']) { ?><img align="right" src="<?php  echo $all_field['image']['sizes']['large']; ?>" class="block_images"><?php } ?><?php echo $all_field['description']; ?></div>
                <hr>
                <?php
            }
        }
        ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <?php include('sidebar.php'); ?>
    </div>

</div>

<?php get_footer(); ?>

<?php genesis(); ?>