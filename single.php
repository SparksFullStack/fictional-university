<?php get_header();?>

<?php
    the_post();
    ?> 
    <h2><?=the_title();?></h2>
    <?=the_content();?>
    <?php
?>

<?php get_footer();?>