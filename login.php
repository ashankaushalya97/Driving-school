<?php 
   /*  session_start();
    //db connection
    require('db.php');
    // $db = mysqli_connect("localhost","root","","gtf");
    if(isset($_POST['login_btn'])){
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        
        $query='select * from users where username="'.$username.'"';

        $res = mysqli_query($connection, $query);

        if($res->num_rows == 0) {
            die ('User not found');
        }

        $fetchR = mysqli_fetch_assoc($res);
        
        // $verifyPassword = password_verify($fetchR['password'],$password);

        $password = md5($password);

       if($password == $fetchR['password']){
            header('Location: NoWay.php');
       } 
       else {
           die ('Incorrect password');
       }
    } 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garbage Managemnet System</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="login">
        <img src="img/icons/i3.png" alt="" class="avatar">
            <h1>Login Here</h1>
            <form method="post" action="index.php">
                <p>Username</p>
                <input type="text" name="username"  placeholder="Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="login_btn" value="Login">
                <a href="#">Lost your password?</a><br>
                <a href="#">Don't have an account?</a>
            </form>

    </div><!-- login -->
    
</body>
</html>