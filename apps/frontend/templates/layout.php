<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>

<?php 
    use_helper('Javascript');
    echo javascript_include_tag('jquery.min.js','fadeslideshow.js');
    echo stylesheet_tag('style.css');
?>

<link rel="shortcut icon" href="/favicon.ico" />
<title>Joseph Borge Ltd.</title>
</head>
<body>
<div class="pagemain">
	<!--Top strip -->
	<div class="topstrip-mn">
    	<div class="topstrip-inn"></div>
    </div>
    <!--Top strip -->
    <div class="bodymain">
    	<div class="body-inn">
    		 <!--Start Header -->
    			<?php include_partial('global/header'); ?>
    		 <!--End Header -->
    		 
			<?php echo $sf_data->getRaw('sf_content') ?>
			 <!--Start Footer -->
	        <?php include_partial('global/footer'); ?>
        	<!--End Footer -->
		</div>
	</div>
</div>

</body>
</html>
<?php if($sf_context->getModuleName() == 'default' && $sf_context->getActionName() != 'products'):?>
	<?php 
		$c = new Criteria();
		//$c->add(GalleryPeer::STATUS,1);
  		$gallary = GalleryPeer::doSelectRS($c);
		 foreach($gallary as $data){
			$img  .= '["/uploads/gallery/'.$data[0].'/thumbnail/'.$data[2].'","","","'.$data[1].'"],';
		 }
	?>
	<script type="text/javascript">
		
		var mygallery=new fadeSlideShow({
			wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
			dimensions: [221, 259], //width/height of gallery in pixels. Should reflect dimensions of largest image
			imagearray: [
				<?php echo $img ?>
			],
			displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
			persist: false, //remember last viewed slide and recall within same session?
			fadeduration: 500, //transition duration (milliseconds)
			descreveal: "ondemand",
			togglerid: ""
		})
	</script>
	
<?php endif;?>