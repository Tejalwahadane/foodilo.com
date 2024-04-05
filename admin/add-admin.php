<?php include('partials/menu.php') ?>
<body>
    <link rel="stylesheet" href="/CSS/admin.css">
</body>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>
        <br><br>
        <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
        ?>
        <form action="" method="POST">

            <table class="tbl-add-admin">
                <tr>
                <td>Full Name :</td>
                <td>
                    <input type="text" name="full_name" placeholder="Enter admin name">
                </td>
            </tr>

            <tr>
                <td>Username :</td>
                <td>
                    <input type="text" name="username" placeholder="Enter username">
                </td>
            </tr>
            
            <tr>
                <td>Password :</td>
                <td>
                    <input type="password" name="password" placeholder="Enter strong password">
                </td>
            </tr>
            <tr>
                <td colspace="2">
                 <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr>
            </table>
        </form>
        </div>
    </div>

<?php include('partials/footer.php') ?> 

<?php
    //process value from form and save in database
    
    //checking if form is submitted or not
    if(isset($_POST['submit']))
    {
        $full_name= $_POST['full_name'];
        $username= $_POST['username'];
        $password= md5($_POST['password']);

        //SQL Query to save data to database
        $sql= "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //execute query
        $res = mysqli_query($conn, $sql) or die(mysqli_query());

        if($res==TRUE)
        {
            //session variable for displaying message
            $_SESSION['add'] = "Admin added Successfully";
            //redirecting page
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else{
            //session variable for displaying message
            $_SESSION['add'] = "Admin not added ";
            //redirecting page
            header('location:'.SITEURL.'admin/add-admin.php');
        }

    }
?>