<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Break Blade
 *
 * @package			Break Blade
 * @version			1.0.0
 * @author			Nathan Doyle <@natetronn>
 * @copyright		Copyright (c) 2012 Cosmos Web Works, LLC
 * @license			MIT  http://opensource.org/licenses/mit-license.php
 * @link			http://github.com/Natetronn/break_blade
 */
 
/**
 * Break Blade - Plugin
 */

$plugin_info = array(
	'pi_name'			=> 'Break Blade',
	'pi_version'		=> '1.0.0',
	'pi_author'			=> 'Nathan Doyle',
	'pi_author_url'		=> 'http://natetronn.com',
	'pi_description'	=> 'Break Blade will slice & dice text by a certain amount of characters and will add a break tag to the end of each line; except for the last line.',
	'pi_usage'			=> Break_blade::usage()
);

class Break_blade {

	public $return_data;

	// --------------------------------------------------------------------

	/**
	 * Constructor
	 */

 	public function __construct()
    {
        $this->EE =& get_instance();
	}

	/**
     * Cut
     *
     * This function slices & dices text based on characters.d
     * Also adds a <br> tag to the end except for the last item.
     *
     * @access		public
     * @return		string
     */
	public function cut() {

		$data 	= $this->EE->TMPL->tagdata;
		$chars 	= $this->EE->TMPL->fetch_param('chars');

		$add =  $chars + 4;

		$sliced = wordwrap($data, $add, "<br>");
		
		if ($chars == FALSE) 
		{
			return 'You forgot to set the character cutoff paramater, please set it.';
		}
		else
		{
			return $sliced;
		}
	}
	
	// --------------------------------------------------------------------

	/**
     * Usage
     *
     * This function describes how the plugin is used.
     *
     * @access		public
     * @return		string
     */
    public static function usage()
    {
        ob_start();
?>

	The following params are available for Break Blade:
	
	chars (required)

	Example usage:

	{exp:break_blade:cut chars="14"}This is some chars long.{/exp:break_blade:cut}

	Will produce:

	This is some<br>
	chars long.

	Note: Break Blade counts characters yet, will not split words.


    <?php
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }
    // END
}


/* End of file pi.break_blade.php */
/* Location: /system/expressionengine/third_party/break_blade/pi.break_blade.php */