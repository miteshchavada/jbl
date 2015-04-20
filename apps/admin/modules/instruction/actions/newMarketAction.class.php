<?php
sfLoader::loadHelpers('I18N');
class newMarketAction extends sfAction
{
	public function execute()
	{
		if(!$this->getUser()->getAttribute('ADMIN_USER_ID'))
  		{
  			$this->redirect('/');
  		}
		if($this->getUser()->getAttribute('ADMIN_USER_ID') AND $this->getUser()->getAttribute('ADMIN_USER_ID') != NULL)
		{
			$this->contents = '';
			$this->getResponse()->setTitle('Joseph Borg Ltd::Admin::New Market');
			Common::makeDirectory(SF_ROOT_DIR.'/web/uploads/cms',0755);
			$filePath= SF_ROOT_DIR.'/web/uploads/cms';
			$fileName = 'newmarket.txt';
			$f = $filePath.'/'.$fileName;
	
			if(file_exists($f) AND filesize($f) > 0)
			{
				$handle = fopen($f, "r");
				$this->contents = fread($handle, filesize($f));
				fclose($handle);
			}
	
			if($this->getRequestParameter('commit'))
			{
				$handle = fopen($f, "w");
				fwrite($handle,$this->getRequestParameter('new_market'));
				fclose($handle);
				$this->redirect('instruction/newMarket?msg=Data%20Updated');
			}
		}
		else
			$this->redirect('/');
	}
	public function handleError()
	{
		$this->contents = '';
		return sfView::SUCCESS;
	}
}
?>