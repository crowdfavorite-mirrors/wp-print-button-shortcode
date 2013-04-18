<?php
/*
Plugin Name: Print Button Shortcode
Plugin URI: http://MyWebsiteAdvisor.com
Description: Shortcode to add a Print Button that prints a specified HTML element.
Version: 1.0.1
Author: MyWebsiteAdvisor
Author URI: http://MyWebsiteAdvisor.com
*/

/*
Print Button Shortcode (Wordpress Plugin)
Copyright (C) 2011 MyWebsiteAdvisor
Contact us at http://MyWebsiteAdvisor.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/


//tell wordpress to register the children_index shortcode
add_shortcode("print-button", "sc_show_print_button");

function sc_show_print_button($atts, $content = null){
		
	$target_element = $atts['target'];
	
	if($target_element == ''){$target_element = "document.body";}
	
	$output = "<input type='button' onClick='return pop_print()' value='Print this page'/>
	
	
	<script type='text/javascript'>
	function pop_print(){
		w=window.open(null, 'Print_Page', 'scrollbars=yes');
		w.document.write(jQuery('$target_element').html());
		w.document.close();
		w.print();
	}
	</script>";
	

	return  $output;
}


?>