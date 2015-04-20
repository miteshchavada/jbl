<!--Start Header -->
<div class="header-main">
	<h1 class="logo"><?php echo link_to(image_tag('jbl-logo.png',array('alt'=>'Joseph Borge Ltd.')),'@home',array('title'=>'Joseph Borge Ltd.'));?></h1>    
</div>
<!--End Header -->
<!--Start Navigation -->
<div class="nav-main">
	<ul class="topnavi">
		<?php if($sf_context->getActionName() == 'index'): ?>
    		<li><?php echo link_to('<span>&nbsp;</span>Home','@home',array('class'=>'current'))?></li>
    	<?php else: ?>
    		<li><?php echo link_to('<span>&nbsp;</span>Home','@home')?></li>
    	<?php endif;?>
    	
    	<?php if($sf_context->getActionName() == 'aboutUs'): ?>
        	<li><?php echo link_to('<span>&nbsp;</span>About Us','@about-us',array('class'=>'current'))?></li>
        <?php else: ?>
        	<li><?php echo link_to('<span>&nbsp;</span>About Us','@about-us')?></li>
        <?php endif;?>
        
        <?php if($sf_context->getActionName() == 'products'): ?>
        	<li><?php echo link_to('<span>&nbsp;</span>Products','@products',array('class'=>'current'))?></li>
        <?php else: ?>	
        	<li><?php echo link_to('<span>&nbsp;</span>Products','@products')?></li>
        <?php endif;?>
        
        <?php if($sf_context->getActionName() == 'newMarket'): ?>
        	<li><?php echo link_to('<span>&nbsp;</span>New Market','@new-market',array('class'=>'current'))?></li>
        <?php else: ?>
        	<li><?php echo link_to('<span>&nbsp;</span>New Market','@new-market')?></li>
        <?php endif;?>
        
        <?php if($sf_context->getActionName() == 'contactUs'): ?>
        	<li><?php echo link_to('<span>&nbsp;</span>Contact Us','@contact-us',array('class'=>'current'))?></li>
        <?php else: ?>
        	<li><?php echo link_to('<span>&nbsp;</span>Contact Us','@contact-us')?></li>
        <?php endif;?>
    </ul>
</div>
<!--End Navigation -->