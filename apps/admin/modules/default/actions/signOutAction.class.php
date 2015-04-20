<?php
sfLoader::loadHelpers('I18N');
class signOutAction extends sfAction
{
	public function execute()
	{
			$this->getUser()->setAuthenticated(false);
			$this->getUser()->getAttributeHolder()->remove('ADMIN_USER_ID');
			$this->getUser()->getAttributeHolder()->remove('ADMIN_USER_NAME');
			$this->redirect('/');
	}
	
}
?>
