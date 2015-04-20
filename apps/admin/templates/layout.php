<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/images/favicon.ico" />
<?php use_javascript('jquery.js');?>
<link href="/admin/css/Main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-main">
	<!--start header -->
    <div class="header-main">
    	<div class="heder-sub">
        	<div class="stocktwits-logo">
            	<a href="#"><img src="/admin/images/jbl-logo.png" alt="Joseph Borg Ltd" /></a>
            </div>
            <?php if($sf_user->getAttribute('ADMIN_USER_ID') > 0): ?>
				<?php include_partial('global/sidebar'); ?>
			<?php endif;?>
        </div>
    </div>
    <!--end header -->
    <!--start body part -->
    <div class="body-main">
    	<div class="body-sub">
        		<?php echo $sf_data->getRaw('sf_content') ?>
        </div>
    </div>
    <!--end body part -->
</div>
 </body>
 
<div style="height:20px;"></div>
<div style="float:left;margin-left:10px;">

</div>
<div style="clear:both"></div>
 
</html>
