<?php use_helper('Javascript'); ?>
<div class="whtcrv-mn">
    <div class="fleft">
    	<img src="/admin/images/wht-crvtop.gif" alt="" class="fleft" />
    </div>
    <div class="whtcntn-mn">
    	<div class="pagehead">
    		<?php echo label_for('',__('Edit Product',null,'edit')); ?>
    		<?php echo form_tag($sf_context->getModuleName().'/edit','multipart=true, name=edit'); ?>
    		<?php if($sf_request->hasErrors()): ?>
			<div class="error-mn">
				<div class="error-txtmn">
					<img alt="errors" src="/admin/images/error-icn-lrg.png">
					<span>Edit Product error</span>
				</div>
				<ul>
					<?php foreach($sf_request->getErrors() as $error): ?>	
						<li><?php echo $error; ?></li>				
					<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
			<?php echo input_hidden_tag('id',$sf_params->get('id')); ?>
			<div class="userlist-mn">
				<div class="signupform-row">
            		<?php echo label_for('',"<font color='red'>*</font>".__('Product Title :',null,'user')); ?>
                	<?php echo input_tag('title',$sf_request->hasErrors()?$sf_params->get('title'):$data->getTitle()); ?>
                </div>
                <div class="signupform-row">
            		<?php echo label_for('',__('Image:',null,'user')); ?>
            		<?php
					if(file_exists(sfConfig::get('app_upload_file_path').'/product/'.$data->getId().'/thumbnail/'.$data->getImage()))
					{
						echo label_for('',image_tag(sfConfig::get('app_upload_webpath').'/product/'.$data->getId().'/thumbnail/'.$data->getImage()),'class="users" style="width:100px;"');
					}
					?>
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
        </form>        
       </div>
    <div class="fleft">
    	<img src="/admin/images/wht-crvbot.gif" alt="" class="fleft" />
    </div>
</div>

<?php
	echo javascript_tag("
		function setVal(component)
		{
			if(component.value == 0)
				component.value = 1;
			else
				component.value = 0;
		}
	");
?>