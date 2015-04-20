<?php
	$instructions = array(
				0=>array
				(
					'name'=>'Home',
					'link'=>'instruction/home',
					'action'=>'home'
				),
				1=>array
				(
					'name'=>'About Us',
					'link'=>'instruction/aboutUs',
					'action'=>'aboutUs'
				),
				2=>array
				(
					'name'=>'New Market',
					'link'=>'instruction/newMarket',
					'action'=>'newMarket'
				),
				3=>array
				(
					'name'=>'Contact Us',
					'link'=>'instruction/contactUs',
					'action'=>'contactUs'
				)
			);
?>
<div class="topnav-cntbg">
	<?php for($i=0;$i<count($instructions);$i++): ?>
			<?php if($sf_context->getActionName() == $instructions[$i]['action']): ?>
				<?php echo link_to(__($instructions[$i]['name'],null,'instructions'),$instructions[$i]['link'],'class=act'); ?>
			<?php else: ?>
				<?php echo link_to(__($instructions[$i]['name'],null,'instructions'),$instructions[$i]['link']); ?>
			<?php endif; ?>
	<?php endfor; ?>
</div>
