<?php
/* $Id: Common.class.php,v 1.1.1.1 2008/09/11 13:07:22 mandar Exp $  */
?>
<?php

class Common
{
	/**
	 * Function same as odd/even class return opposite of give class
	 * @access public
	 */
	public static function getNC($class){
		if($class == 'odd' || $class == "")
			$class = 'even';
		else
			$class = 'odd';
		return $class;
	}

	/**
	 * Function same as odd/even class return opposite of give class
	 * @access public
	 * specially for event lsting
	 */
	public static function getNC1($class){
		if($class == 'odd1' || $class == "")
			$class = 'even1';
		else
			$class = 'odd1';
		return $class;
	}

	// SVS:MAN:11052007: Function for pop_up window even odd classes...
	public static function getNC_POP($class){
		if($class == 'pop_odd')
			$class = 'pop_even';
		else
			$class = 'pop_odd';
		return $class;
	}

	/**
	 * Function for paging in all frontend,admin listing pages.
	 * @access public
	 */
	public static function paggingPropel($pager,$uri){
 		$navigation = '';$seePage = '';
 		 if ($pager->haveToPaginate()) {
 		     if ($pager->getPage() != 1) {
 		       $navigation .= link_to('First', $uri.'1',array('class'=>'pagg')).'&nbsp;';
 		       $navigation .= link_to('Previous', $uri.$pager->getPreviousPage(),array('class'=>'pagg')).' ';
 		     }
 		     // Pages one by one
 		     $links = array();
 		     foreach ($pager->getLinks() as $page) {
 		       $links[] = link_to_unless($page == $pager->getPage(), $page, $uri.$page,'class=pagg');
 		       if($page == $pager->getPage())
 		        $seePage = $page;
 		     }
 		     $navigation .= join('  ', $links);
 		     if ($pager->getPage() != $pager->getLastPage()) {
 		       $navigation .= ' '.link_to('Next', $uri.$pager->getNextPage(),array('class'=>'pagg')).'&nbsp;';
 		       $navigation .= link_to('Last', $uri.$pager->getLastPage(),array('class'=>'pagg')).'&nbsp;';
 		     }
 		  	if($seePage > 0)
 		   	$navigation .= ' '.__('Your are at',null,'common').' '.$seePage.'/'. $pager->getLastPage() .', ';
 		}
		$navigation .= __('Total',null,'common').' '.format_number_choice('[0]  '.__('no result',null,'common').'|[1] 1 '.__('results',null,'common').'|(1,+Inf] %1% ', array('%1%' => $pager->getNbResults()), $pager->getNbResults());
 		return $navigation;
 	}

 	/**
	 * Get date formate as per u require
	 * @dateVal Date value array value
	 */
	public static function getDateFormate($dateVal,$formate='.'){
		$temp = explode(' ',$dateVal);
		$tempDate = explode('-',$temp[0]);
		$tempTime = explode(':',$temp[1]);

		$dateV = $tempDate[2].$formate.$tempDate[1].$formate.$tempDate[0].' '.$tempTime[0].':'.$tempTime[1];

		return $dateV;
	}

	/**
	 * function for find date difference
	 * @access public
	 * @param is pass for earler_date and later_date
	 * @returns an array of numeric values representing days, hours, minutes & seconds respectively
	 */
	public static function getDateDiff($earlierDate, $laterDate)
	{
		//returns an array of numeric values representing days, hours, minutes & seconds respectively
	   	$ret=array('days'=>0,'hours'=>0,'minutes'=>0,'seconds'=>0);
		$totalsec = strtotime($laterDate) - strtotime($earlierDate);

	   	if ($totalsec >= 86400) {
	    	$ret['days'] = floor($totalsec/86400);
	     	$totalsec = $totalsec % 86400;
	   	}

	   	if ($totalsec >= 3600) {
	    	$ret['hours'] = floor($totalsec/3600);
	     	$totalsec = $totalsec % 3600;
	   	}

	   	if ($totalsec >= 60) {
	    	$ret['minutes'] = floor($totalsec/60);
	   }
	   $ret['seconds'] = $totalsec % 60;
	   return $ret;
	}
	/**
	 * To make a directory
	 * @path as string, @permission as string 
	 * @access public
	 */
	public static function makeDirectory($path, $permission = 0777)
	{
		if(!is_dir($path))
			mkdir($path,$permission);
	}
	//to remove the directory
	public static function rmdirectory($path) {
		$dir = opendir($path) ;
		while($entry = readdir($dir)){
			if(is_file( "$path/$entry" )){
				unlink( $path.'/'.$entry ) ;
			} elseif ( is_dir( "$path/$entry" ) && $entry!='.' && $entry!='..' ){
				self::rmdirectory( "$path/$entry" );
			}
		}
		closedir($dir);
		return rmdir($path);
	}
}
?>