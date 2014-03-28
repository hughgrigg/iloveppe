<?php
$recent_posts_array = get_posts([
        'posts_per_page' => 10
        ]);

?>

<h2 class="widget-title"><?php _e('Recent Posts', 'ilppe') ?></h2>

<ul class="posts-list">
    <?php foreach ($recent_posts_array as $post): ?>
        <li class="posts-list-item">
            <a class="posts-list-link" href="<?php echo get_permalink($post->ID); ?>" title="Permanent link to &lsquo;<?php echo $post->post_title; ?>&rsquo;" rel="bookmark">
                <?php echo $post->post_title; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>