<?php include('partials-front/menu.php'); ?>



<!-- CAtegories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>

        <?php 

            //Display all the cateories that are active
            //Sql Query
            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);

            //CHeck whether categories available or not
            if($count>0)
            {
                //CAtegories Available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get the Values
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    ?>
                    
                    <a href="<?php echo SITEURL; ?>categories-foods.php?category_id=<?php echo $id; ?>">
                        <div class="box-3 float-container">
                            <?php 
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not found.</div>";
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
            else
            {
                //CAtegories Not Available
                echo "<div class='error'>Category not found.</div>";
            }
        
        ?>
        

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->



    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <footer>
      <div id="foot1">
          <div id="link1">
              <div id="t1">USEFUL LINKS</div>
              <div id="t2"><a href="#" style="color: white; text-decoration: none;">PRIVACY POLICY<a></div>
              <div id="t3"><a href="index.html" style="color: white; text-decoration: none;">HOME</a></div>
              <div id="t4"><a href="index.html" style="color: white; text-decoration: none;">CATEGORIES</a></div>
              <div id="t5"><a href="product.html" style="color: white; text-decoration: none;">PRODUCTS</a></div>
          </div>
          <div id="link2">
              <div id="t6"><a href="about.html" style="color: white; text-decoration: none;">ABOUT US</a></div>
              <div id="t7"><a href="gallery.html" style="color: white; text-decoration: none;">GALLERY</a></div>
              <div id="t8"><a href="#" style="color: white; text-decoration: none;">VIDEOS</a></div>
              <div id="t9"><a href="#" style="color: white; text-decoration: none;">TESTIMONIALS</a></div>
          </div>
          <div id="link3">
              <div id="c1">Contact Information</div>
              <div id="c5">Our Official Address:- dfsjf sjfdjfd jsdgfj dsjgfjgf sjdgfjdgj</div>
              <div id="c2">General Enquiries:- Fodilo@gmail.com</div>
              <div id="c3">call Us:-97xxxxxx54</div>
              <div id="c4">Our Timing:- Mon- Sun : 6:30AM - 11:00PM</div>
          </div>
      </div>
   </footer> 
    <!-- footer Section Ends Here -->

</body>
</html>