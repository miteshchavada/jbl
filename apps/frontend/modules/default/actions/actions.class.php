<?php

/**
 * default actions.
 *
 * @package    www.wtd.com
 * @subpackage default
 * @author     wethefive
 * @version    SVN: $Id: defaultactions.class.php $
 */
sfLoader::loadHelpers('I18N');
class defaultActions extends sfActions
{
  /**
   * Executes index action
   * @access public
   */
	public function executeIndex()
	{
		$this->contents = myUser::getContent('home.txt');
					
	}
	
}
?>
