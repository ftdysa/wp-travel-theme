<div class="col-md-3 hidden-print hidden-xs hidden-sm">
    <div id="affixed-sidebar" class="sidebar">
        <ul class="nav nav-sidebar nav-sidebar-first">
            <li class="nav-item nav-item-home"><a href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
            <li class="nav-item nav-item-about"><a href="/about"><i class="fa fa-user fa-fw"></i> About</a></li>
            <li class="nav-item nav-item-map"><a href="/map"><i class="fa fa-map-marker fa-fw"></i> Map</a></li>
            <li class="nav-item nav-item-galleries"><a href="/galleries"><i class="fa fa-image fa-fw"></i> Galleries</a></li>
            <li class="nav-item nav-item-contact-us"><a href="/contact-us"><i class="fa fa-envelope fa-fw"></i> Contact Us </a></li>
            <li>
		        <div class="well subscribe-form">
			        <div id="msg-form-wysija-html543bdcdf477de-2" class="wysija-msg ajax"></div>
			        <form id="form-wysija-html543bdcdf477de-2" method="post" action="#wysija" class="widget_wysija html_wysija" role="form">
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
				        <button class="btn btn-primary" type="submit">Subscribe via Email</button>
			        </form>
		        </div>
	        </li>
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
        <h4>Archives</h4>
        <ul class="nav nav-sidebar">
        <?php wp_get_archives() ?>
        </ul>
        <h4>Categories</h4>
        <ul class="nav nav-sidebar">
        <?php wp_list_categories('title_li='); ?></php>
        </ul>
    </div>
</div>
