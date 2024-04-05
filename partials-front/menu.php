<?php include('config/constants.php'); ?>


<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Best Food Ordering Service | Fodilo.com</title>
   <link rel="stylesheet" href="style/nav_bar.css">
   <link rel="stylesheet" href="style/index.css">
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="style/about_us.css">
   <link rel="stylesheet" href="style/menu.css">
   <link rel="stylesheet" href="style/order.css">
 </head>
 <body>
   <nav id="navbar">
      <div id="logo">
         <img src="images/logo.jpeg" alt="Fodilo.com">
      </div>
      <ul>
         <li class="item"><a href="<?php echo SITEURL; ?>index.php">Home</a></li>   
         <li class="item"><a href="<?php echo SITEURL; ?>categories.php">Menu</a></li>
         <li class="item"><a href="<?php echo SITEURL; ?>foods.php">Food-Search</a></li>
         <li class="item"><a href="<?php echo SITEURL; ?>about_us.php">About Us</a></li>
         <li class="item"><a href="<?php echo SITEURL; ?>gallery.php">Gallery</a></li>
         <li class="item"><a href="<?php echo SITEURL; ?>contact.php">Contact</a></li>
      </ul>
   </nav>