wp-util
=======

Wordpress Utility Functions

Contains useful functions for Wordpress themes. Files are organised so that
functions for similar purposes are grouped together

Installation
------------

1. Copy wp-util folder to root of theme
2. Add:

        require get_template_directory() . '/wp-util/wp-util.php';

   to functions.php

General
-------
add_slug_body_class - adds "page-slug" to the body class of a page (easier than
                      page-19 or whatever for styling across multiple
                      installations)
