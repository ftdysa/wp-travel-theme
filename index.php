<?php get_header() ?>

<div class="col-md-9">
    <div class="visible-xs-block visible-sm-block">
        <div class="well">
        <form id="form-wysija-html543bdcdf477de-1" method="post" action="#wysija" class="form-inline widget_wysija html_wysija" role="form"> 
        
        <div id="msg-form-wysija-html543bdcdf477de-1" class="wysija-msg ajax"></div> 
        <div class="form-group"> 
                        <label for="subscribe-name">Name</label> 
                        <input id="subscribe-name" type="text" name="wysija[field][cf_1]" class="form-control wysija-input validate[required]" title="Name"  value="" /> 
                </div> 
                <div class="form-group"> 
                        <label for="subscribe-email">Email</label> 
                        <input id="subscribe-email" type="text" name="wysija[user][email]" class="form-control wysija-input validate[required,custom[email]]" title="Email"  value="" /> 
                </div> 
                <input type="hidden" name="form_id" value="1" /> 
                <input type="hidden" name="action" value="save" /> 
                <input type="hidden" name="controller" value="subscribers" /> 
                <input type="hidden" value="1" name="wysija-page" /> 
                <input type="hidden" name="wysija[user_list][list_ids]" value="1" /> 
                <button style="margin-top: 15px;" class="btn btn-primary" type="submit">Subscribe!</button> 
        </form> 
        </div>
    </div><div class="clearfix"></div> 
    <?php
    if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) : the_post();
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'content', 'excerpt' );

        endwhile;
        // Previous/next post navigation.


    else :
        // If no content, include the "No posts found" template.
        get_template_part( 'content', 'none' );

    endif;
    ?>

    <ul class="pager">
        <?php
        $newer_link = get_previous_posts_link('Newer Posts <i class="fa fa-angle-double-right"></i>');
        $older_link = get_next_posts_link('<i class="fa fa-angle-double-left"></i> Older Posts');
        if ($older_link) {
            ?>
            <li class="previous">
            <?php echo $older_link; ?>
            </li>
        <?php
        }
        if ($newer_link) {
        ?>
            <li class="next">
            <?php echo $newer_link;?>
            </li>
        <?php
        }
        ?>
    </ul>
</div>

<?php
get_sidebar();
get_footer();
?>
