<?php

/**
 * options actions.
 *
 * @package    sf_sandbox
 * @subpackage options
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
sfLoader::loadHelpers('I18N');
class defaultActions extends sfActions
{
  /**
   * Executes index action
   *
   */
	public function executeIndex()
	{
		if($this->getUser()->getAttribute('ADMIN_USER_ID'))
				$this->redirect('instruction/aboutUs');
				
		//$this->forward('default', 'module');
		if($this->getRequestParameter('login'))
		{
			$c = new Criteria();
			$c->add(AdminloginPeer::ADMIN_USER,$this->getRequestParameter('adminuser'));
			$c->add(AdminloginPeer::ADMIN_PASS,md5($this->getRequestParameter('adminpass')));
			$udata = AdminLoginPeer::doSelectOne($c);
			if(AdminLoginPeer::doCount($c) > 0)
			{
				$this->getUser()->setAuthenticated(true);
				$this->getUser()->setAttribute('ADMIN_USER_ID',$udata->getId());
				$this->getUser()->setAttribute('ADMIN_USER_NAME',$udata->getAdminUser());
				$this->redirect('instruction/aboutUs');
			}
			else
			{
				$this->getRequest()->setError('loginError','Invalid UserName and Password');
			}
		}
	}
}
?>
