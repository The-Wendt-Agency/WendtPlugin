<?php

/*
Plugin Name: The Wendt Agency
Description: A test plugin to learn and expand my WP Toolbelt. This function is to remove the admin bar from the live site while logged in.
*/

//Remove the admin bar from the front end of the site
add_filter('show_admin_bar', '__return_false');

