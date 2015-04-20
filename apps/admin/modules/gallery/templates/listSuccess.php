<?php /*?><?php use_helper('Javascript') ?>
<?php use_javascript('jquery.js'); ?>
<script language="javascript">
	function changestatus(vv)
	{
		jQuery.ajax({ url: '<?php echo sfConfig::get('app_web_path') ?>/gallery/changestatus?id='+vv});
	}
</script>
<?php */?>
<div class="whtcrv-mn">
    <div class="fleft">
    	<img src="/admin/images/wht-crvtop.gif" alt="" class="fleft" />
    </div>
    <div class="whtcntn-mn">
    	<div class="pagehead">
        	<?php echo label_for('',__('Gallery List',null,'user')); ?>
            <div class="sublinks-mn">
            	<?php echo link_to(__('Add Gallery Image',null,'user'),$sf_context->getModuleName().'/add','class=adduser'); ?>
            	
            </div>
        </div>
		<div class="userlist-mn">
    		<div class="userhead-txt">
    			<?php echo label_for('',__('Title',null,'user'),'class="username" style="width:200px;"'); ?>
    			<?php echo label_for('',__('Image',null,'user'),'class="username" style="width:275px;"'); ?>
				<?php /*?><?php echo label_for('',__('Active',null,'user'),'class="operation-lnks"'); ?><?php */?>
				<?php echo label_for('',__('Operation',null,'user'),'class="operation"'); ?>
            </div>
            <?php $class = 'userdtl-txt' ?>
            <?php foreach($results as $data):?>
				<div class="<?php echo $class ?>">
					<?php
						if($class == 'userdtl-txt')
							$class= 'userdtl-txt1';
						else
							$class= 'userdtl-txt';
					?>
					<?php echo label_for('',$data['TITLE'].'&nbsp;','class="users" style="width:200px;"'); ?>
					<?php
					
					if(file_exists(sfConfig::get('app_upload_file_path').'/gallery/'.$data['ID'].'/thumbnail/'.$data['IMAGE']))
					{
						echo label_for('',image_tag(sfConfig::get('app_webpath').'/uploads/gallery/'.$data['ID'].'/thumbnail/'.$data['IMAGE']),'class="users" style="width:275px;"');
					}
					else
						echo label_for('','&nbsp;','class="users" style="width:275px;"');
					?>
					
					
				<?php /*?>	<label class="operation-lnks" style="margin-top:3px;">
						<?php if($data['STATUS'] == 1): ?>
						<?php echo checkbox_tag('status',1,true,array('onclick'=>'changestatus('.$data['ID'].')')) ?>
						<?php else: ?>
						<?php echo checkbox_tag('status',1,false,array('onclick'=>'changestatus('.$data['ID'].')')) ?>
						<?php endif; ?>
					</label><?php */?>
					
					
					<label class="operation-lnks">
						<?php echo link_to(image_tag('/admin/images/edit-icn.gif'),$sf_context->getModuleName().'/edit?id='.$data['ID'],'class="edtlnk"'); ?>
						<?php echo link_to(image_tag('/admin/images/delete-icn.gif'),$sf_context->getModuleName().'/delete?id='.$data['ID'],array('confirm'=>__('Are you sure to delete?',null,'user'),'class'=>'dltlnk')); ?>
					</label>
				</div>
			<?php endforeach;?>
	    </div>
        <div class="userdtl-ftr">
        	<?php echo Common::paggingPropel($pager,$sf_context->getModuleName().'/list?&page=') ?>
		</div>
    </div>
    <div class="fleft">
    	<img src="/admin/images/wht-crvbot.gif" alt="" class="fleft" />
    </div>
</div>