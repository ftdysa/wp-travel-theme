
<section class="share">
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