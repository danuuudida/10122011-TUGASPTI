<?php if ( ! defined('BASEPATH')) exit('No direct script access 
allowed'); 
  
/** 
 * CODEIGNITER template library 
* 
* @author  Jérôme Jaglale 
* @url     http://maestric.com/doc/php/codeigniter_template 
*/ 
class Template 
{ 
var $template_data = array(); 
function set($name, $value) 
{ 
$this->template_data[$name] = $value; 
} 
}
/* End of file Template.php */ 
/* Location: ./application/libraries/Template.php */