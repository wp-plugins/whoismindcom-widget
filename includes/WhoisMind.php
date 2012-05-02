<?php
class WhoisMind
{
   const plugin_name = 'WhoisMind';
   const min_php_version = '5.2';
   
	/**
	* head
	*
	* Prints some JavaScript into the document head. 
	*
	* @return none	Creates some HTML output
	*/
   public static function head() {
         include('dynamic_javascript.php');
   }
   
   /**
	* initialize
	* 
	* The main function for this plugin, similar to __construct()
	*/
   public static function initialize() {
       WhoisMindTests::min_php_version(self::min_php_version, self::plugin_name);
       wp_enqueue_script('jquery'); 
   }
}
/* EOF */
