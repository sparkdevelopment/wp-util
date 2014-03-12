<?php

/*
 * General site functions
 */

// Page Slug Body Class
function add_slug_body_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

if ($general_prefs['add_slug_body_class'])
    add_filter('body_class', 'add_slug_body_class');