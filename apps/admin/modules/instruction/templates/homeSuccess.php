<div class="topnav">
	<div class="fleft">
    	<img src="/admin/images/lnk-crvlft.gif" alt="" class="fleft" />
    </div>
    <?php include_partial('instructionsidebar'); ?>
    <div class="fleft">
    	<img src="/admin/images/lnk-crvrt.gif" alt="" class="fleft" />
    </div>
</div>
<div class="whtcrv-mn">
    <div class="fleft">
    	<img src="/admin/images/wht-crvtop.gif" alt="" class="fleft" />
    </div>
    <?php echo form_tag('instruction/home'); ?>
 	<div class="whtcntn-mn">
    	<div class="txtsubmit">
			<?php
				if($sf_request->hasErrors())
				{
					echo "<div style='margin-left:100px;;color:red;'>";
					foreach($sf_request->getErrors() as $error)	
					{	
						echo image_tag('stop-sm.gif')."&nbsp;";
						echo __($error,null,'instructions');
						echo "<div style='height:1px;'></div>";
					}
					echo "</div>";
				}
			?>
			<div class="error-txt">
				<?php
					if($sf_params->get('msg'))
						echo $sf_params->get('msg');
				?>
        	</div>
			<div class="pagehead">
				<?php echo label_for('',__('Home',null,'instructions')); ?>
			</div>
			<div style="float:left">
				<?php
					
					echo textarea_tag('home_data',$contents,array('id'=>'homeid'));
					echo include_partial('global/tinymce',array('textfield_id' => 'homeid' ));
				 
					//echo textarea_tag('home_data',,'size=80x20');
					/*echo textarea_tag('home_data',$contents ,array('rich'=>true
							,'size'=>'900x900'
							,'tinymce_options'=>'
							plugins : "advhr,advimage,advlink,fullscreen,table,preview",
							language: "en",
							theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
							theme_advanced_buttons2 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,forecolor,backcolor,|,sub,sup,|,advhr,hr,removeformat",
							theme_advanced_buttons3 : "tablecontrols,|,charmap,fullscreen,preview"
							'));*/ 
				?>
			</div>
			<div class="savemn">
        		<span class="inptsv-lft">
					<?php echo submit_tag(__('save',null,'help')); ?>
				</span>
			</div>
		</div>
	</div>	
	</form>
	<div class="fleft">
    	<img src="/admin/images/wht-crvbot.gif" alt="" class="fleft" />
    </div>
</div>