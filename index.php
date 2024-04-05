<?php include('partials-front/menu.php'); ?>
   <section id="home">
      <h1 class="h-one">Welcome to Fodilo.com</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, veniam hic alias cupiditate tempora impedit repellat error quas!</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima neque distinctio libero adipisci veritatis tempore, </p>
      <button class="btn"><a href="foods.php" style="text-decoration: none; color: aliceblue;">Order Now</a></button>
   </section>
   <section id="services-container">
      <h1 class="h-primary center">Our Services</h1>
      <div id="services">
          <div class="box">
              <img src="images/catering-img.jpg" alt="">
              <h2 class="h-secondary center">Food Catering</h2>
              <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                  sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                  voluptas beatae facilis labore, omnis sint quae eum.</p>
          </div>
          <div class="box">
              <img src="images/bulk-img.jpeg" alt="">
              <h2 class="h-secondary center">Bulk Ordering</h2>
              <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                  sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                  voluptas beatae facilis labore, omnis sint quae eum.</p>
          </div>
          <div class="box">
              <img src="images/delivery-image.avif" alt="">
              <h2 class="h-secondary center">Food Ordering</h2>
              <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                  sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                  voluptas beatae facilis labore, omnis sint quae eum.</p>
          </div>
      </div>
  </section>
  <div class="container">
    <div class="ring">
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
        <div class="img"></div>
    </div>
  </div>
  <!-- food searching system starts here-->
  <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
<!-- fOOD sEARCH System Ends Here -->

<!-- CAtegories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>
        <?php
        //query to dispaly category
        //gives limit to category in home pafe so only 3 are shown
        $sql = "SELECT * FROM tbl_category  WHERE active='yes' AND featured='yes' LIMIT 3";
        //execute query
        $res = mysqli_query($conn, $sql);
        //to check if category is empty or not
        $count = mysqli_num_rows($res);

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
                //get values from database
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
                ?>
                        
                <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                <div class="box-3 float-container">
                <?php 
                //Check whether Image is available or not
                    if($image_name=="")
                    {
                        //Display MEssage
                        echo "<div class='error'>Image not Available</div>";
                    }
                    else
                    {
                        //Image Available
                        ?>
                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                        <?php
                    }
                ?>
                                

                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                </div>
                </a>

        <?php
            }
        }
        else{
            echo "<div class='error'>Category not added</div>";
        }
        ?>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->

<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>
        <?php
        //Getting Foods from Database that are active and featured
        //SQL Query
        $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

        //Execute the Query
        $res2 = mysqli_query($conn, $sql2);

            //Count Rows
        $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
        if($count2>0)
        {
             //Food Available
             while($row=mysqli_fetch_assoc($res2))
            {
                //Get all the values
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['discription'];
                $image_name = $row['image_name'];
                ?>

                <div class="food-menu-box">
                     <div class="food-menu-img">
                        <?php 
                            //Check whether image available or not
                            if($image_name=="")
                            {
                                //Image not Available
                                echo "<div class='error'>Image not available.</div>";
                            }
                            else
                            {
                                //Image Available
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Paneer Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        ?>
                            
                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $title; ?></h4>
                        <p class="food-price">₹<?php echo $price; ?></p>
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        <br>
                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

                <?php
            }
        }
        else
        {
            //Food Not Available 
            echo "<div class='error'>Food not available.</div>";
        }
            
        ?>


    <p class="text-center">
        <a href="foods.php">See All Foods</a>
    </p>
</section>
<!-- fOOD Menu Section Ends Here -->

 </body>
 </html>

 <?php include('partials-front/footer.php'); ?>