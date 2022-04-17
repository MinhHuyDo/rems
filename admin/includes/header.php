 <div class="dashboard-header" >
            <nav class="navbar navbar-expand-lg  fixed-top"style="background-color:gold">
                <a class="navbar-brand" href="dashboard.php"style="color:black">CONSOLE</a>
               
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                      
                     
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/profile picture.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2"style="background-color:gold">
                                <div class="nav-user-info"style="color:gold;background-color:black">
                                    <?php
$aid=$_SESSION['remsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$aid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                                    <h5 class="mb-0  nav-user-name"style="color:gold;background-color:black"><?php echo $name; ?> </h5>
                                </div>
                                <a class="dropdown-item" href="admin-profile.php" style="color:black"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="change-password.php" style="color:black"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"style="color:black"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>