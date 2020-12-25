<?php 
include('validation.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div>
		<form class="box" action="login.php" method="REQUEST">
		
			<h1>Log in</h1>

			<input id="email" placeholder="Enter E-mail" type="email" name="email" required>
			<input id="password" placeholder="Enter Password" type="password" name="password" required>


			<input class="btn btn-primary" id="Login" type="submit" name="login_customer" value="login" onclick="validate()">

			<hr class="md-3">
			
			<p>Not a Customer? <a href="registration.php">Register</p>
			<p><a href="adminlogin.php">Login as Admin</p>

		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script type="text/javascript">
		$(function(){
			$('#Login').click(function(e){
				var valid = this.form.checkValidity();

				

				if(valid){

					
					var email = $('#email').val();
					var password = $('#password').val();
					e.preventDefault();

					$.ajax({
						type:'POST',
						url:'loginprocess.php',
						data:{email: email,password: password },
						success: function(data){
							Swal.fire({
								'title':'Customer',
								'text':data,
								'type':'success'
							})

						},
						error: function(data){
							Swal.fire({
								'title':'Errors',
								'text':'There are errors while saving the data',
								'type':'error'
							})

						}



					});

				}else{	
					
				}

				

			});
			
		});
	</script>


</body>
</html>




