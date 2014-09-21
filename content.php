<main role="main">
    <article>
        <header class="post-header">
            <?php
            the_title(
                '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">',
                '</a></h2>'
            );

            ?>
            <p class="post-meta">
                <time class="post-date" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date() ?></time>
                by <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) ?>"><?php echo get_the_author(); ?></a>
                | <?php the_tags('tagged with: '); ?>
            </p>
        </header>
        <section class="post-content">
            <?php if (is_search()) {
                the_excerpt();
            } else {
                the_content();
            }
            ?>
        </section>
        <footer class="post-footer">
            <?php get_template_part('social-links'); ?>
        </footer>

    </article>
</main>