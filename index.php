<?php
/**
 * Created by PhpStorm.
 * User: ijaz0
 * Date: 11/1/2018
 * Time: 12:23 PM
 */


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">



</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="register-form" method="post" action="register.php">
            <input type="text" name="name" placeholder="name"/>
            <input type="email" name="email" placeholder="email address"/>
            <input type="password" name="password" placeholder="password"/>
            <input type="password" name="cpassword" placeholder="confirm password"/>

            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="" method="post">

            <input type="text" placeholder="Email" name="email" required/>
            <input type="password" placeholder="password" name="password" required/>
            <input class="btn btn-success " type="submit" name="login" value="Login">
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/js.js"></script>

</body>
</html>

