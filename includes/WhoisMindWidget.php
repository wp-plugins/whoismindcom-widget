<?php
/**
* WhoisMindWidget extends WP_Widget
*
*/
class WhoisMindWidget extends WP_Widget{
    public $name = 'WhoisMind';
    public $description = 'Widget for Whoismind.com';
    public $control_options = array('title' => 'WhoisMind.com Widget');
    
    /**
	 * Register widget with WordPress.
	 */
    function __construct(){
         $widget_options = array(
            'classname'    => __CLASS__,
            'description'    => $this->description,
        );
         parent::__construct(__CLASS__,$this->name,$widget_options,$this->control_options);
    }
    
    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
    public function form($instance)
    {
        $placeholders = array();
        
        foreach ($this->control_options as $key => $val)
        {
            $placeholders[$key.'.id']    = $this->get_field_id($key);
            $placeholders[$key.'.name']    = $this->get_field_name($key);
            if (isset($instance[$key])){
                $placeholders[$key.'.value']   = esc_attr($instance[$key]);
            }else{
                $placeholders[$key.'.value']   = $this->control_options[$key];
            }
        }
        
        $ctrl_form = '<label for="'.$placeholders['title.id'].'">Title</label><br/>
           <input id="'.$placeholders['title.id'].'" name="'.$placeholders['title.name']
          .'" value="'.$placeholders['title.value'].'" /><br/>';
          echo $ctrl_form;
    }
    
    //Static Functions
    static function register_this_widget(){
         register_widget(__CLASS__);
    }
    
    /**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
    public function widget($args,$instance){
            extract($args);
            $title = apply_filters('widget_title',$instance['title']);
            if(empty($title)) $title = $this->control_options['title'];
            
            $form = '<div id="whois"><form id="whois_form">
            <input type="text" name="whois_val" id="whois_val" value="" />
            <input type="button" id="whois_btn" value="Whois?" />
            </form></div>';
            
            echo $before_widget;
            echo $before_title.$title.$after_title.$form.$after_widget;
    }
}
/* EOF */
