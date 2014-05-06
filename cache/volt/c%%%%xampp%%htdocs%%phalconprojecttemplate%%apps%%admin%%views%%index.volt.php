<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php echo $this->tag->getTitle(); ?>
        <?php echo $this->tag->stylesheetLink('bootstrap/css/bootstrap.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/nprogress.css'); ?>
		<?php echo $this->tag->stylesheetLink('theme/admin/css/styles.css'); ?>
		
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
		
		
		<?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/nprogress.js'); ?>
        <?php echo $this->tag->javascriptInclude('bootstrap/js/bootstrap.js'); ?>
		 <?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/jquery/jquery-ui.min.js'); ?>
		
        <?php echo $this->tag->javascriptInclude('js/utils.js'); ?>
		<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('theme/admin/js/plugins/jquery-validation/jquery.validate.min.js'); ?>
		
		
		<script>
			 $(document).ready(function(){
				 NProgress.start();
			 });
			 
			  $(window).load(function(){
				 NProgress.done();
			 });
		</script>
    </head>
    <body>
		  
        <?php echo $this->getContent(); ?>
			
		
		  
    </body>
</html>