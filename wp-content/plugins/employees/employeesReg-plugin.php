<?php
/**
 * @package EmployeesRegPlugin
 */

 
 /* 
 * Plugin Name:       Employees
 * Plugin URI:        
 * Description:       Collect employee data withthis plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Kennedy Karuri
 * Author URI:        
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        
 
 */


 /* security check*/

 defined('ABSPATH') or die('gerara here!!');

/* Checking if the vendor folder exists */  

 if(file_exists(dirname(__FILE__). '/vendor/autoload.php')){
    require_once dirname(__FILE__). '/vendor/autoload.php';
 }
 
/**
 * to activate the plugin.
 */
function activate_externally(){
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_externally');


function deactivate_externally(){
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_externally');


if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}
