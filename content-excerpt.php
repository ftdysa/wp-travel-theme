
<main role="main">
    <article>
        <header class="post-header">
            <?php
            the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">',
                '</a>
                    <small><time class="post-date" datetime="'. get_the_date() .'">'.get_the_date().'</time></small>
                    </a></h1>'
            );

            ?>
            <div class="post-tags">
                <?php the_tags('Tagged with: '); ?>
            </div>
        </header>

        <section class="post-content">
            <?php the_excerpt(); ?>
            <a href="<?php echo esc_url(get_permalink()); ?>">Continue Reading <i class="fa fa-arrow-right"></i></a>
        </section>

        <footer class="post-footer">
            <section class="author">
                <h4>- <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) ?>"><?php echo get_the_author(); ?></a></h4>

                <p>Read <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) ?>">more posts</a> by this author.</p>
            </section>
        </footer>

        <section class="share">
            <h4>Like this post? Share it or something.</h4>
            <a
                class="icon-twitter" href="https://twitter.com/share?text=<?php echo esc_url(the_title()); ?>&amp;url=<?php echo esc_url(get_permalink()) ?>"
                onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a
                class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()) ?>"
                onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a
                class="icon-google-plus" href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()) ?>"
                onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-inverse fa-stack-1x"></i>
                </span>
            </a>
        </section>
    </article>
</main>