<?php
/**
 * instruction actions.
 *
 * @package    sf_sandbox
 * @subpackage instruction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class instructionActions extends sfActions
{
  /**
   * Executes index action
   *
   */
	public function executeIndex()
	{
		//$this->forward('default', 'module');
		if($this->getRequestParameter('login'))
		{
			$c = new Criteria();
			$c->add(AdminloginPeer::ADMIN_USER,$this->getRequestParameter('adminuser'));
			$c->add(AdminloginPeer::ADMIN_PASS,md5($this->getRequestParameter('adminpass')));
			if(AdminLoginPeer::doCount($c))
			{
				$this->getUser()->setAttribute('USER_NAME',$this->getRequestParameter('adminuser'));
				$this->redirect('instruction/aboutUs');
			}
			else
			{
				$this->getRequest()->setError('loginError','Invalid UserName and Password');
			}
		}
	}
}