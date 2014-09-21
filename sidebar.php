<div class="col-md-3 hidden-print hidden-xs hidden-sm">
    <div id="affixed-sidebar" class="sidebar">
        <ul class="nav nav-sidebar nav-sidebar-first">
            <li class="nav-item nav-item-home"><a href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
            <li class="nav-item nav-item-about"><a href="/about"><i class="fa fa-users fa-fw"></i> About</a></li>
            <li class="nav-item nav-item-waypoints"><a href="/waypoints"><i class="fa fa-map-marker fa-fw"></i> Waypoints</a></li>
            <li><a href="<?php bloginfo('rss_url'); ?>"><i class="fa fa-fw fa-rss"></i> Subscribe</a></li>
        </ul>
        <h4>Recent Posts</h4>
        <ul class="nav nav-sidebar">
        <?php
        foreach (wp_get_recent_posts() as $post) {
            echo sprintf(
                '<li><a href="%s">%s</a></li>',
                esc_url(get_permalink($post['ID'])),
                $post['post_title']
            );
        }
        ?>
        </ul>
        <h4>Categories</h4>
        <ul class="nav nav-sidebar">
        <?php wp_list_categories('title_li='); ?></php>
        </ul>
    </div>
</div>