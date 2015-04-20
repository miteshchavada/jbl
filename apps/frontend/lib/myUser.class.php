<?php

class myUser extends sfBasicSecurityUser
{
	public static function getContent($fileName){
		
		$contents='';
		$f = sfConfig::get('app_upload_webpath').'/cms/'.$fileName;
		if(file_exists($f) AND filesize($f) > 0)
		{
			$handle = fopen($f, "r");
			$contents = fread($handle, filesize($f));
			fclose($handle);
		}
		return $contents;
	}
}
