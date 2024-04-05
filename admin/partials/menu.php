<?php
    include('../config/constants.php');
    include('login-check.php');
?>

<html>
    <head>
        <title>Best Food Delivery Service | Fodilo.com</title>
        <link rel="stylesheet" href="../CSS/admin.css">
        <link rel="stylesheet" href="../nav_bar.css">
    </head>

    <body>
        <!-- header section starts -->
        <div class="menu">
                <nav id="navbar">
                    <div id="logo">
                       <img src="../images/logo.jpeg" alt="Fodilo.com">
                    </div>
                    <ul>
                       <li class="item"><a href="index.php">Home</a></li>   
                       <li class="item"><a href="manage-admin.php">Admin</a></li>
                       <li class="item"><a href="manage-category.php">Category</a></li>
                       <li class="item"><a href="manage-food.php">Food</a></li>   
                       <li class="item"><a href="manage-order.php">Order</a></li>
                       <li class="item"><a href="log-out.php">Log out</a></li>
                    </ul>
                </nav>
        </div>
        <!-- header section ends -->