<?php get_header();?>

<?php
    while(have_posts()) {
        the_post();?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?=get_theme_file_uri('images/ocean.jpg');?>);"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?=the_title();?></h1>
            <div class="page-banner__intro">
                <p>REPLACE LATER</p>
            </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">

        <?php
            $the_parent = wp_get_post_parent_id(get_the_ID());
            $the_child = "";

            if ($the_parent){
               ?>
                <div class="metabox metabox--position-up metabox--with-home-link">
                    <p><a class="metabox__blog-home-link" href="<?=get_permalink($the_parent)?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?=get_the_title($the_parent)?></a> <span class="metabox__main"><?=the_title()?></span></p>
                </div>
                <?php
            } 

            ?>

                <?php
                    // this will return the collection of child elements if they exist for the current page.
                    $child_collection = get_pages(array( 'child_of' => get_the_ID()));

                    // here the menu will only be loaded if the page has a parent page, or has a collection of child pages
                    if ($the_parent or $child_collection) { ?>
                        <div class="page-links">
                            <!-- Below, if there is a parent value, it will get the title of the parent; otherwise it will get the current title -->
                            <h2 class="page-links__title"><a href="<?= get_permalink($the_parent)?>"><?=get_the_title($the_parent)?> </a></h2> 
                            <ul class="min-list">
                                <?php
                                    if ($the_parent){
                                        $child_of_value = $the_parent; // if there is a parent element, we want its ID
                                    } else {
                                        $child_of_value = get_the_ID(); // if there is no parent, we want the current ID
                                    }

                                    wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => $child_of_value
                                    ))
                                ?>
                            </ul>
                        </div>
                   <?php }
                ?>

            <div class="generic-content">
                <?=the_content();?>
            </div>

        </div>
        <?php
    }
?>

<?php get_footer();?>