<?php
/* Template Name: Page of pages */
get_header(); ?>
    <?php 
        // override the loop
        query_posts(array(
            "post_parent" => get_the_ID(),
            "post_type" => array(
                "page",
                "top",
                "video",
                "summary",
				 "skills",
                "products",
				 "testmon",
                "certs",
                "owner",
                "photos",
                "contact",
                "bottom",
            ),
            "orderby" => "menu_order",
            "order" => "ASC"
        ));

        // now use the loop
        while (have_posts()) : the_post();
            // now we have a new page context - get the template for it
            $our_template = get_post_meta(get_the_ID(), 'page_template', true);
            // try to load our template first
            if ($our_template) {
                $t_path = get_template_directory() . '/' . $our_template;
            } else {
                $t_path = get_page_template();
            }
            if (file_exists($t_path)) {
                // this will actually render the template
                // don't require_once in case other pages
                // use the same template
                load_template($t_path, false);
            } else {
                echo "Couldn't load" . $t_path;
            }
        endwhile;
    ?>
<?php get_footer(); ?>
