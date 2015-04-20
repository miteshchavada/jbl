<?php
sfLoader::loadHelpers('I18N');
class changestatusAction extends sfAction
{
	public function execute()
	{
		$product = GalleryPeer::retrieveByPk($this->getRequestParameter('id'));
		if($product->getstatus() == 1)
		{
			$product->setStatus(0);
		}
		else
		{
			$product->setStatus(1);
		}
		$product->save();
		echo $product->getStatus();
		exit;
	}
}
?>
