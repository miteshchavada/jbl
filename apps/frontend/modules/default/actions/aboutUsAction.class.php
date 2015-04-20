<?php
/**
 * error actions.
 * @package    www.wtd.com
 * @subpackage default
 * @author     wethefive
 * @version    SVN: $Id: errorAction.class.php,v 1.2 $
 */
 sfLoader::loadHelpers('I18N');
class aboutUsAction extends sfAction
{
	
	public function execute()
  	{
  		$this->contents = myUser::getContent('aboutus.txt');
	
	}
}
