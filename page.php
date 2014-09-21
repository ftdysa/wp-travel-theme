<?php get_header() ?>

    <div class="col-md-9">
        <nav class="main-nav clearfix">
            <a class="home" href="/"><i></i> Home</a>
        </nav>

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('content', get_post_format());
            }
        } else {
            get_template_part('content', 'none');
        }
        ?>
    </div>

<?php
get_sidebar();
get_footer();
?>