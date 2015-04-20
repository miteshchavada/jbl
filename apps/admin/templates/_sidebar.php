<?php sfLoader::loadHelpers('I18N') ?>
<div class="navmn">
			<?php if($sf_context->getModuleName() == 'instruction'): ?>
				<?php echo link_to(__('Instructions',null,'common'),'instruction/home','class="active"'); ?>
			<?php else: ?>
				<?php echo link_to(__('Instructions',null,'common'),'instruction/home'); ?>
			<?php endif; ?>
			<?php if($sf_context->getModuleName() == 'product'): ?>
				<?php echo link_to(__('Product',null,'common'),'product/list','class=active'); ?>
			<?php else: ?>
				<?php echo link_to(__('Product',null,'common'),'product/list'); ?>
			<?php endif; ?>
			<?php if($sf_context->getModuleName() == 'gallery'): ?>
				<?php echo link_to(__('Gallery',null,'common'),'gallery/list','class=active'); ?>
			<?php else: ?>
				<?php echo link_to(__('Gallery',null,'common'),'gallery/list'); ?>
			<?php endif; ?>
			<?php echo link_to(__('Sign Out',null,'common'),'default/signOut'); ?>
</div>