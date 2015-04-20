<!--Start Body Content Part -->
<div class="bodycntn-mn">
	<div class="bodycntn-inn">
    	<div class="slider-mn">
        	<div id="fadeshow1"></div>
        </div>
        <div class="right-col">
        	
        	<h2 class="titles"><font>Welcome to </font>Joseph Borge Ltd.</h2>
        	<?php if($contents != ''):?>
	            <p class="txtdtls">
	            	<?php echo $contents;?>
	            </p>
            <?php endif;?>
			<span class="prodbtn-raw"><?php echo link_to('ABOUT US','@about-us',array('class'=>'aboutlink'))?></span>
        </div>
        <div style="float:left;border-top:1px solid #CE8283;width:862px;">
        	<?php
        		$c = new Criteria();
  				$c->add(ProductPeer::STATUS,1);
  				$products = ProductPeer::doSelectRS($c);
        	?>
        	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="5" style="margin-top:15px;">
	        	<tr>
	              <?php $cnt =1;?>
                  <?php foreach($products as $data):?>
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
			                <td align="center" height="20">&nbsp;</td>
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
        	<span class="prodbtn-raw" style="width:96%; margin:0 0 15px 0;">
				<?php echo link_to('ALL PRODUCTS','@products',array('class'=>'prodlink'))?>
            </span>
        </div>
    </div>
    
   <div class="bot-crv"></div>
</div>
<!--End Body Content Part -->
</div>