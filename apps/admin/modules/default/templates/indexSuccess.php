<div class="loginbox-mn">
	<div class="fleft">
    	<img src="/admin/images/login-topcrv.png" alt="" class="fleft" />
    </div>
	<div class="loginbox-infomn">
        <div style="color:red; text-align:center; padding-top:5px; font-size:14px; font-weight:bold;">
            <?php if($sf_request->hasError('loginError'))
                    {
                        echo $sf_request->getError('loginError');
                    }
            ?>
        </div>
    	<div class="loginfrm-mn">
    		<h2>Log in</h2>
			<?php echo form_tag('','method=post'); ?>
			<div class="loginfrm-mn">
           		<?php echo label_for('',__('User Name',null,'common')); ?> 
				<?php echo input_tag('adminuser'); ?>
			</div>
			<div class="loginfrm-mn">
				<?php echo label_for('',__('Password',null,'common')); ?> 
				<?php echo input_password_tag('adminpass'); ?>
			</div>
			<div class="inptbtn-mn">
            	<span class="inpt-lft">
					<?php echo submit_tag(__('Login',null,'common'),'name=login'); ?>
				</span>
			</div>
			</form>
		</div>
	</div>
	<div class="fleft">
    	<img src="/admin/images/login-botcrv.png" alt="" />
    </div>
</div>
	</div>
</div>