<?php include('partials-front/menu.php'); ?>

 
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php 

                //Get the Search Keyword
                //$search = $_POST['search'];
                $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            ?>


            <h2>Foods on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php 

                //SQL Query to Get foods based on search keyword
                //$search = burger '; DROP database name;
                // "SELECT * FROM tbl_food WHERE title LIKE '%burger'%' OR description LIKE '%burger%'";
                $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR discription LIKE '%$search%'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether food available of not
                if($count>0)
                {
                    //Food Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['discription'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                    // Check whether image name is available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
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

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food Not Available
                    echo "<div class='error'>Food not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

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