<?php
	/**
	* @package predikarenPlugin
	/*
	Plugin Name: Predikarens bibelreferenser
	Plugin URI: https://www.bitsandpcs.fi/predikaren/
	description: >- A plugin that enables Swedish Bible references to show up from BibleGateway.com in popup windows when hovering over a reference.
	Version: 1.1
	Author: Magnus Dahlbacka
	Author URI: https://www.bitsandpcs.fi
	License: GPL2 or later

	{Plugin Name} is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 2 of the License, or
	any later version.

	{Plugin Name} is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with {Plugin Name}. If not, see {License URI}.

	*/

if ( ! defined( 'ABSPATH')){
	die;
}

define( 'PREDBR_FILE', __FILE__ );
define( 'PREDBR_CSS_URL', plugins_url( '/', PREDBR_FILE ).'css' );
define( 'PREDBR_JS_URL', plugins_url( '/', PREDBR_FILE ).'js' );

require_once(plugin_dir_path(__FILE__).'/includes/predikaren_scripts.php');

class Predikaren{
   function __construct(){

   }
}


$predikarenPlugin =  new Predikaren();