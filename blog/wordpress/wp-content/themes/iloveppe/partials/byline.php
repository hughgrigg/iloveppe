<div class="entry-meta">

    <ul class="article-data">
        <li>
            <?php _e('By', 'ilppe') ?> <?php the_author_link(); ?>
        </li>
        <li>
            <?php _e('Published', 'ilppe') ?> <a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time('Y/m/d'); ?></a> 
        </li>
        <li class="hide-for-print">
            <a href='<?php comments_link(); ?>' title='Go to comments for this article'>
                <span class='icon-bubbles'></span> 
                <?php comments_number('No comments yet - be the first', 'One comment so far - add yours', '% comments so far - add yours'); ?>
            </a>
        </li>
    </ul>

    <?php
    get_template_part('partials/sharrre');

    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>

</div>