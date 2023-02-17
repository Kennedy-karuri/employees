<?php
/**
 * @package EmployeesRegPlugin
 */

 namespace Inc\Base;

 use \Inc\Base\Controller;
 
 class Enqueue extends Controller{
    
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue(){
        wp_enqueue_style('pluginstyle', $this->plugin_url . '/assets/pluginstyle.css');
        wp_enqueue_script('pluginscript', $this->plugin_url . '/assets/pluginscript.js');
    }
 }