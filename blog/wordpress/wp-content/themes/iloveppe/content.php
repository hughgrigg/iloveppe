<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="Permanent link to this article" rel="bookmark">
                <?php the_title(); ?> <span class="icon-link"></span>
            </a>
        </h1>

        <?php get_template_part('partials/byline') ?>

    </header>

    <hr />

    <?php the_content(); ?>

    <footer class="entry-meta">
        
        <h3 id="keepreading"><?php _e('Keep Reading', 'ilppe') ?></h3>
        <ul class="medium-block-grid-2 small-block-grid-1 adjacent-posts">
            <?php
            if (get_previous_post()):
                ?>
                <li>
                    <?php
                    previous_post_link();
                    ?>
                </li>
                <?php
            endif;
            if (get_next_post()):
                ?>
                <li>
                    <?php
                    next_post_link();
                    ?>
                </li>
                <?php
            endif;
            ?>
        </ul>

        <h3 id='tags'><span class='icon-tag'></span> <?php _e('Tags', 'ilppe') ?></h3>

        <?php the_tags('<div class="tag-links">', '', '</div>'); ?>

    </footer>

</article>