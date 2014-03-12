<?php

/*
 * Security functions
 */

// Disable pingbacks (offers some protection against being used for DDOS attacks
function disable_pingback($methods) {
    unset($methods['pingback.ping']);
    return $methods;
}

if ($security_prefs['disable_pingback'])
    add_filter('xmlrpc_methods', 'disable_pingback', 10, 1);