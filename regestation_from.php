<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Regestaion Form</title>

	<!-- Regestation Form style -->
	<link rel="stylesheet" href="css/style.css">

</head>


<body>

	<div class="regestarion_from_continar">

		<form action="" method="post">

            <h3>Registration</h3>
			<input type="text" name="name" required placeholder="Fast name">
			<input type="text" name="name" required placeholder="Last name">
			<input type="email" name="email" required placeholder="exmple@gmail.com">
			<input type="password" name="password" required placeholder=" password">
			<input type="password" name="cpassword" required  placeholder=" confrim password">

            <!-- opction section -->


			<select name="usertype" >
				<option value="user">User</option>
				<option value="Admin">Admin</option>
			</select>

			
			 <!-- <input type="checkbox" name="checkbox" value="checkbox" class="checkbox" > <p class="checkbox-p">I agree the all trems & conditions</p>  -->

            <!-- submit Button And login action -->
			<input type="submit" value="Registration Now" name="Registration_btn" class="submit_btn" >
			<p>Alredy have an account? <a href="login_from.php">Login</a> </p>

		</form>
		


	</div>
	


</body>
</html>