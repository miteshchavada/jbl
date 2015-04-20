<?php
sfLoader::loadHelpers('I18N');
class addAction extends sfAction
{
	public function execute()
	{
		$this->getResponse()->setTitle('Joseph Borg Ltd::Admin::Add Product');	
		
		if($this->getUser()->getAttribute('ADMIN_USER_ID') > 0)
		{
			
			if($this->getRequestParameter('save') && !$this->getRequest()->hasErrors())
			{
				$mem = new Product();
				$mem->setTitle($this->getRequestParameter('title'));
				$mem->save();
				
				if($this->getRequest()->getFileName('image'))
				{
					$id = $mem->getId();
					
					Common::makeDirectory(sfConfig::get('app_upload_file_path')."/product",0777);
					Common::makeDirectory(sfConfig::get('app_upload_file_path')."/product/".$id,0777);
					Common::makeDirectory(sfConfig::get('app_upload_file_path')."/product/".$id."/thumbnail",0777);
					
					$fileExt = explode(".", $this->getRequest()->getFileName('image'));
					$newFileName = 'image.'.strtolower(end($fileExt));
					
					$thumbnail = new sfThumbnail(100, 100);
					$thumbnail->loadFile($this->getRequest()->getFilePath('image'));
					$thumbnail->save(sfConfig::get('app_upload_file_path').'/product/'.$id.'/thumbnail/'.$newFileName,'image/png');
					
					$this->getRequest()->moveFile('image', sfConfig::get('sf_upload_dir').'/product/'.$id.'/'.$newFileName);
					
					$mem->setImage($newFileName);
					$mem->save();
				}
				
				$this->redirect($this->getModuleName().'/list');
			}
		}
		else
			$this->redirect('/');
	}
	public function handleError()
	{
		addAction::execute();
		return sfView::SUCCESS;
	}
}
?>
