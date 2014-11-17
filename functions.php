<?php

function custom_excerpt_length($length) {
    return 200;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

add_filter('next_posts_link_attributes', function() {
    return 'class="newer-posts"';
});


add_filter('previous_posts_link_attributes', function() {
    return 'class="older-posts"';
});
