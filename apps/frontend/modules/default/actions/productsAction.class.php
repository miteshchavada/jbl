<?php
/**
 * error actions.
 * @package    www.wtd.com
 * @subpackage default
 * @author     wethefive
 * @version    SVN: $Id: errorAction.class.php,v 1.2 $
 */
 sfLoader::loadHelpers('I18N');
class productsAction extends sfAction
{
	
	public function execute()
  	{
  		$c = new Criteria();
  		//$c->add(ProductPeer::STATUS,1);
  		$this->results = ProductPeer::doSelectRS($c);
  		
	}
}
