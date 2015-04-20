<?php use_helper('Javascript') ?>
<div class="whtcrv-mn">
    <div class="fleft">
    	<img src="/admin/images/wht-crvtop.gif" alt="" class="fleft" />
    </div>
    <div class="whtcntn-mn">
    	<div class="pagehead">
        	Add Product
        </div>
        <?php echo form_tag($sf_context->getModuleName().'/add','multipart=true, name=addNewProduct'); ?>
        <?php if($sf_request->hasErrors()): ?>
			<div class="error-mn">
				<div class="error-txtmn">
					<img alt="errors" src="/admin/images/error-icn-lrg.png">
					<span>Add Product error</span>
				</div>
				<ul>
					<?php foreach($sf_request->getErrors() as $error): ?>	
						<li><?php echo $error; ?></li>				
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
		<div class="userlist-mn">
        	<div class="">
            	<div class="signupform-row">
            		<?php echo label_for('',"<font color='red'>*</font>".__('Product Title :',null,'user')); ?>
                	<?php echo input_tag('title',$sf_request->hasErrors()?$sf_params->get('title'):''); ?>
                </div>
                <div class="signupform-row">
            		<?php echo label_for('',__('Image:',null,'user')); ?>
					<?php echo input_file_tag('image'); ?>
                </div>	            
                <div class="inptbtn-mn pad-lft185">
					<span class="inpt-lft">
						<?php echo submit_tag(__('save',null,'user'),'name=save','class=but_bg'); ?>
					</span>
				<div class="inptspace">&nbsp;</div>
				<span class="inpt-lft">
					<?php echo button_to(__('cancel',null,'user'),$sf_context->getModuleName().'/list','class=but_bg'); ?>				
				</span>
			</div>
            </div>
        </div>
    </div>
    <div class="fleft">
    	<img src="/admin/images/wht-crvbot.gif" alt="" class="fleft" />
    </div>
</div>