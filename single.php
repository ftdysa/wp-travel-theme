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
                    
//                if (comments_open()) comments_template();
            }
        } else {
            get_template_part('content', 'none');
        }
        ?>

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
    </div>

<?php
get_sidebar();
get_footer();
?>
