<?php
sfLoader::loadHelpers('I18N');
class editAction extends sfAction
{
	public function execute()
	{
		$this->getResponse()->setTitle('Joseph Borg Ltd::Admin::Edit Product');
		
		if($this->getUser()->getAttribute('ADMIN_USER_ID') > 0)
		{
			if($this->getRequestParameter('save') && !$this->getRequest()->hasErrors())
			{	
				$mem = ProductPeer::retrieveByPk($this->getRequestParameter('id'));
				$mem->setTitle($this->getRequestParameter('title'));
				$mem->save();
				
				if($this->getRequest()->getFileName('image'))
				{
					$id = $mem->getId();
					
					Common::rmdirectory(sfConfig::get('app_upload_file_path')."/product/".$id);
					
					Common::makeDirectory(sfConfig::get('app_upload_file_path')."/product/".$id,0755);
					Common::makeDirectory(sfConfig::get('app_upload_file_path')."/product/".$id."/thumbnail",0755);
					
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
			else
			{
				$c = new Criteria();
				$c->add(ProductPeer::ID,$this->getRequestParameter('id'));
				$this->data = ProductPeer::doSelectOne($c);
			}
		}
		else
			$this->redirect('/');
	}
	public function handleError()
	{
		editAction::execute();
		return sfView::SUCCESS;
	}
}
?>
