<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Login - Best Food Ordering System | Fodilo.com</title>
        <link rel="stylesheet" href="../CSS/admin.css">
    </head>

    <body style="background-image: url(../images/login-bg.jpeg);">
        
        <div class="login">
            <h1 class="text-center" style="margin-top:30px; padding: 20px; background-color: #d982c8;">Login</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <form action="" method="POST" class="text-center" style="width: 70%; margin-left:12%; font-size:30px; color: whitesmoke; border:5px solid #d982c8">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username" style="font-size: 20px;"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password" style="font-size: 20px;"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary" style="margin: 1%; background-color: #24bb10;
    color: black">
            <br><br>
            </form>
        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        // for ligin
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>