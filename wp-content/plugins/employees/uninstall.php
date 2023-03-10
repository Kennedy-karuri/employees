<?php
/**
 * @package EmployeesPlugin
 */

/**
 * Trigger this file on plugin uninstall
 */

 /*-------------------------------------------------------------------------*/
/*                        SECURITY CHECK                                   */
/*-------------------------------------------------------------------------*/
if(! defined('WP_UNINSTALL_PLUGIN')){
    die;
}

 /*-------------------------------------------------------------------------*/
/*                        CLEAR DATABASE DATA                              */
/*-------------------------------------------------------------------------*/

//Access database via SQL

global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'employees'");
$wpdb->query("DELETE FROM wp_posts_meta WHERE post_id NOT IN (SELECT ID FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT ID FROM wp_posts)");