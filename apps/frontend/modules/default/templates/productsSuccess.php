<!--Start Body Content Part -->
    <div class="bodycntn-mn">
    	<div class="bodycntn-inn">
    		
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="5" style="margin-top:15px;">
            	
	              <tr>
	              <?php $cnt =1;?>
                  <?php foreach($results as $data):?>
	                <td width="25%" align="center">
                    	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        	<tr>
                            	<td align="center" height="115">
									<?php
                                    echo image_tag(sfConfig::get('app_web_path').'/uploads/product/'.$data[0].'/thumbnail/'.$data[2]);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><?php echo $data[1];?></td>
                          	</tr>
                          <tr>
			                <td align="center" height="40">&nbsp;</td>
                        </tr>
                        </table>
	                </td>
	                <?php if(($cnt%4) == 0):?> 
	                	</tr>
	                	<tr>
	                <?php endif;?>
	                <?php $cnt++;?> 
	             	<?php endforeach;?>   
          </table>

        </div>
        <div class="bot-crv"></div>
    </div>
    <!--End Body Content Part -->
</div>
