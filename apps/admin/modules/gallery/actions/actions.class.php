<?php

/**
 * user actions.
 *
 * @package    sf_sandbox
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class galleryActions extends sfActions
{
	/**
	* Executes index action
	*
	*/
	public function executeDelete()
	{
		
		if($this->getUser()->getAttribute('ADMIN_USER_ID') > 0 )
		{
			Common::rmdirectory(sfConfig::get('app_upload_file_path')."/gallery/".$this->getRequestParameter('id'));
			
			$mem = GalleryPeer::retrieveByPk($this->getRequestParameter('id'));
			$mem->delete();
			$this->redirect($this->getModuleName().'/list');
			
		}
		else
			$this->redirect('/');
	}
}
