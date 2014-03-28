<?php

get_header();

?>

<div class="large-8 columns content-columns">

	<article>

		<header class="page-header">
            <h1 class="page-title">
                <?php if (is_category()): ?>
                    <?php sprintf(__('Articles in the &lsquo;%s&rsquo; Category', 'ilppe'), single_cat_title()) ?>
                <?php elseif (is_tag()): ?>
                    <?php sprintf(__('Articles Tagged with &lsquo;%s&rsquo;', 'ilppe'), ucfirst(single_tag_title('', false))) ?>
                <?php elseif (is_day()): ?>
                    <?php sprintf(__('Articles Published on the<br />%s', 'ilppe'), the_time(__('jS \o\f F Y', 'ilppe'))) ?>
                <?php elseif (is_month()): ?>
                    <?php sprintf(__('Articles Published in<br />%s', 'ilppe'), the_time(__('F Y', 'ilppe'))) ?>
                <?php elseif (is_year()): ?>
                    <?php sprintf(__('Articles Published in<br />%s', 'ilppe'), the_time(__('Y', 'ilppe'))) ?>
                <?php elseif (is_home()): ?>
                    <?php _e('Recent Posts', 'ilppe') ?>
                    <?php
                else:
                    single_post_title();
                endif;
                ?>
            </h1>

            <?php
            get_template_part('partials/sharrre');

            // Insert pagination links if beyond page 1
            if (get_previous_posts_link()):
                ?>

                <h4 class="text-center">
                    <?php _e('Page', 'ilppe') ?>:
                </h4>

                <?php
                ilppe_pagination_links();
                ?>

                <?php
            endif;
            ?>

        </header>

        <hr />

		<ul class="articles-grid small-block-grid-1">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <h4>
                            <a href="<?php the_permalink(); ?>" title="Permanent link to &lsquo;<?php the_title(); ?>&rsquo;" rel="bookmark">
                                <?php the_title(); ?> <small><?php the_time('Y/m/d'); ?></small>
                            </a>
                        </h4>
                        <div class="row">
                            <div class="medium-6 columns">
                                <p class="text-center">
                                    <a href="<?php the_permalink(); ?>" title="Permanent link to &lsquo;<?php the_title(); ?>&rsquo;" rel="bookmark">
                                        <?php the_post_thumbnail('300x200'); ?>
                                    </a>
                                </p>
                            </div>
                            <div class="medium-6 columns">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </li>
                    <?php
                endwhile;

            else:

                ilppe_show_404();

            endif;
            ?>

        </ul>

        <?php
        if (more_pages()):
            ?>

            <h4 class="text-center"><?php _e('Page', 'ilppe') ?>:</h4>
            <?php
            // Insert pagination links
            ilppe_pagination_links();
        endif;
        ?>

	</article>

</div>
<aside class="large-4 columns sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php

get_footer();
