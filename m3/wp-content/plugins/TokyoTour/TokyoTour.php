<?php
/*
Plugin Name: Tokyo Tour
Description: Plugin Description
Author: Tokyo Tour
*/

function change_logo () {
  echo '<link rel="stylesheet" href="' . get_theme_file_uri() . '/css/logo.css">';
}
add_action("login_head", "change_logo");