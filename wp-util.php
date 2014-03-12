<?php

/*
 * Contains includes for all util files and flags for swiching utils on/off
 */

$prefs = array('general','security');

/*
 * Switch to TRUE to enable function listed
 */
$general_prefs = array(
    'add_slug_body_class' => TRUE // Adds "page-slug" to body class
);

$security_prefs = array(
    'disable_pingback' => TRUE // Disabled pingbacks
);

foreach ($prefs as $pref_name) {
    if (in_array(TRUE, ${$pref_name."_prefs"})) {
        include_once 'wp-util-' . $pref_name . '.php';
    }
}