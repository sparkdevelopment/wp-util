<?php

/*
 * Contains includes for all util files and flags for swiching utils on/off
 */

$prefs = array('general');

/*
 * Switch to TRUE to enable function listed
 */
$general_prefs = array(
    'add_slug_body_class' => FALSE // Adds "page-slug" to body class
);

foreach ($prefs as $pref_name) {
    if (in_array(TRUE, ${"$pref_name_prefs"})) {
        include_once 'wp-util-' . $pref_name . '.php';
    }
}