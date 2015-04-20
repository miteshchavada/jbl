<?php
  $js_path = '/admin/js/tiny_mce/tiny_mce.js';
  sfContext::getInstance()->getResponse()->addJavascript($js_path);
?>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "<?php echo $textfield_id ?>",
        theme : "advanced",

        plugins : "advhr,advimage,advlink,fullscreen,table,preview",
	language: "en",
	theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,forecolor,backcolor,|,sub,sup,|,advhr,hr,removeformat",
	theme_advanced_buttons3 : "tablecontrols,|,charmap,fullscreen,preview",
theme_advanced_toolbar_location : "top", 
        theme_advanced_toolbar_align : "left", 
        theme_advanced_statusbar_location : "bottom", 
        theme_advanced_resizing : false,

})
</script>
