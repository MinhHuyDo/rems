 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
 <footer id="footer" class="footer footer-1 bg-white" >
            <!-- Widget Section
    ============================================= -->
            <div class="footer-widget"style="background-color:black" >
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 widget--about">
                            <div class="widget--content" style="color:gold">
                                <?php 

                    
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="footer--logo">
                                    <img src="assets/images/logo/logo.jpg" style="width: 50%;" alt="logo">
                                </div>
                                <div class="footer--contact">
                                    <ul class="list-unstyled mb-0">
                                        <div class="contact-panel"style="color:white">
                                            <h3 style="color:gold">Address</h3>
                                            <p style="color:white"><?php  echo $row['PageDescription'];?></p>
                                        </div>
                                        <div class="contact-panel">
                                            <h3 style="color:gold">Phone:</h3>   
                                            <p style="color:white">+<?php  echo $row['MobileNumber'];?></p>
                                        </div>
                                        <div class="contact-panel">
                                            <h3 style="color:gold">Email:</h3>
                                            <p style="color:white"><?php  echo $row['Email'];?></p>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links" >
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="about.php" style="color:gold">About us</a></li>
                                    <li><a href="contact.php" style="color:gold">Contact us</a></li>
                                   <li><a href="properties-grid.php" style="color:gold">Properties</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-3 col-md-2 widget--links">
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="admin/login.php" style="color:gold">Admin</a></li>
                                    <li><a href="index.php" style="color:gold">Home</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget--newsletter">
                            <img src="assets/images/about/gold.jpg" width="375" height="250" alt="logo">
                        </div>
                        <!-- .col-md-4 end -->

                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-widget end -->

            <!-- Copyrights
    ============================================= -->
            <div class="footer--copyright text-center"style="background-color:black;">
                <div class="container">
                    <div class="row footer--bar" >
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <span style="color:gold">© 2022 , Company name.</span>
                        </div>

                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-copyright end -->
        </footer>