<?php
/*
Plugin Name: BP Random Member Widget
Plugin URI: http://www.wptoolbox.de/plugins/2010/02/bp-random-member-widget/
Description: This Plugin adds a sidebar widget with avatar and username of a random BuddyPress user. Dieses BuddyPress-Plugin erstellt ein Sidebar-Widget, welches ein zuf&auml;lliges Mitglied mit Avatar und Namen anzeigt.
Version: 1.0 
Revision Date: 23.02.2010
Author: Yaway Media
Author URI: http://www.yaway.de
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
*/
function bp_randommemberwidget_init() {
	require( dirname( __FILE__ ) . '/bp-randommemberwidget.php' );
}
add_action( 'bp_init', 'bp_randommemberwidget_init' );
?>