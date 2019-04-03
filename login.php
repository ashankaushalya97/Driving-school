<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
?>
<?php

    // check for form submission
//    if (isset($_POST['submit'])) {
//
//            $errors = array();
//
//            // check if the username and password has been entered.
//            if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
//                $errors[] = 'Username is missing / invalid.';
//            }
//            if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
//                $errors[] = 'password is missing / invalid.';
//            }
//            // check if there are any errors in the form
//            if(empty($errors)) {
//
//                // save username and password into variables
//                $email = mysqli_real_escape_string($connection,$_POST['email']);
//                $password = mysqli_real_escape_string($connection,$_POST['password']);
//                $hashed_password = sha1($password);
//
//                // prepare dat
///*                 abase query
// */                $query = "SELECT * FROM user
//                            WHERE email = '{$email}'
//                            AND password = '{$hashed_password}'
//                            LIMIT 1";
//
//                 $result_set = mysqli_query($connection, $query);
//
//                 verify_query($result_set);
//
//                    //query succesfull.
//                    if (mysqli_num_rows($result_set) == 1) {
//                        //valid user found.
//                        $user = mysqli_fetch_assoc($result_set);
//                        $_SESSION['user_id'] = $user['id'];
//                        $_SESSION['first_name'] = $user['first_name'];
//
//                        // updation last login
//                        $query = "UPDATE user SET last_login = NOW()";
//                        $query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1";
//
//                        $result_set = mysqli_query($connection, $query);
//
//                        verify_query($result_set);
//
//
//
//                        header("Location: users.php");
//                    }else {
//                        //username or password invalid.
//                        $errors[] = 'Invalid username / password.';
//                    }
//
//
//
//            }
//
//    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Login page</title>

</head>
<body>
	<section class="container-fluid bg">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<br>
				
				<br>
				<form class="form-container">
					<div class="form-group">
						<label for="username-field">Username</label>
						<input type="email" class="form-control" id="username-field" aria-describedby="emailHelp" placeholder="Username">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="password-field">Password</label>
						<input type="password" class="form-control" id="password-field" placeholder="Password">
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="submit" class="btn btn-primary btn-block" id="login-btn">Login</button>
					<div class="row">
						<div class="col-sm-6">
							<a href="#">Forgot your password?</a>
						</div>
					</div>
				</form>
			</section>
		</section>
	</section>
    <script src="js/plugin/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/controller/loginController.js"></script>

</body>
</html>