<?php get_header();?>

<?php
    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?=the_permalink();?>"><?=the_title()?></a></h2>
        <?php the_content();?>
        <hr>
    <?php
    }
?>

<?php get_footer();?>