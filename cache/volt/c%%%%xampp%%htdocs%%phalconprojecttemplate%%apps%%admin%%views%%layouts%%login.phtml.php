      
 <div class="page-container">      
		<div class="page-content page-content-default">
	   <?php echo $this->getContent(); ?>
	   </div>
</div>
 <script type="text/javascript">
        $("#signinForm").validate({
		rules: {
			login: "required",
			password: "required"
		},
		messages: {
			firstname: "Please enter your login",
			lastname: "Please enter your password"			
		}
	}); 
		$("#signupForm").validate({
		rules: {
			login: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			're-password': {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
			},
                        name: "required"			
		}
	}); 
	
        </script>