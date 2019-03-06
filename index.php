<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?=get_theme_file_uri('images/ocean.jpg');?>);"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Welcome to our blog!</h1>
    <div class="page-banner__intro">
        <p>Keep up with our latest news.</p>
    </div>
    </div>  
</div>

<div class="container container--narrow page-section">
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="post-item">
                <h2><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>

                <div class="metabox">
                    <p>Posted by Charlie in News</p>
                </div>

                <div class="generic-content">
                    <?=the_excerpt()?>
                    <p><a href="<?=the_permalink()?>">Continue Reading &raquo;</a></p>
                </div>
            </div>
        <?php }
    ?>
</div>

<?php get_footer(); ?>