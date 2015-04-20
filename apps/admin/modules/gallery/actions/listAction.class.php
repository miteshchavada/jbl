<?php
sfLoader::loadHelpers('I18N');
class listAction extends sfAction
{
	public function execute()
	{
		$this->getResponse()->setTitle('Joseph Borg Ltd::Admin::Gallery List');
		if($this->getUser()->getAttribute('ADMIN_USER_ID') > 0)
		{
			
			$c = new Criteria();
			
			$this->pager = new sfPropelPager('Gallery', sfConfig::get('app_page'));
			$this->pager->setCriteria($c);
			$this->pager->setPage($this->getRequestParameter('page',1));
			$this->pager->setPeerMethod('doSelectRs');
			$this->pager->init();
			
			$this->results = $this->pager->getResults();
			$this->results->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		}
		else
			$this->redirect('/');
	}
}
?>