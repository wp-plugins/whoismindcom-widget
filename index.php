<?php
/*-------------------------------------------------------------------
Plugin Name: WhoisMind
Plugin URI: http://whoismind.com/
Description: WhoisMind.com widget allows users to enter a hostname, ip address or email and displays all public domain information and related data.
Author: WhoisMInd
Version: 1.0
Author URI: http://whoismind.com/
--------------------------------------------------------------------*/
/*
WhoisMind widget for Wordpress
Copyright (C) 2012  WhoisMind.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

include_once('includes/WhoisMind.php');
include_once('includes/WhoisMindWidget.php');
include_once('tests/WhoisMindTests.php');

add_action('init', 'WhoisMind::initialize');
add_action('wp_head', 'WhoisMind::head');
add_action('widgets_init', 'WhoisMindWidget::register_this_widget');
/* EOF */
