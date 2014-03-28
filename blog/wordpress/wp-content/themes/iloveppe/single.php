<?php
get_header();
?>

<div class="large-8 columns content-columns">

    <?php
    if (have_posts()):

        while (have_posts()): the_post();

    get_template_part('content', get_post_format());

    endwhile;

    else:

        ilppe_show_404();

    endif;
    ?>

    <?php
        // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }

    get_template_part('partials/sharrre');
    ?>

</div>

<aside class="large-4 columns sidebar">
    <?php get_sidebar(); ?>
</aside>

<?php
get_footer();
