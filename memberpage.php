<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="lihomepage.php">CodeHub</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a href="lihomepage.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                     <li>
                        <a href="memberpage.php">Profile</a>
                    </li>
                     <li>
                        <a href="myVideo.php">My Videos</a>
                    </li>
                    <li>
                      <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
                                      
                               <h2>Profile Page - Welcome <?php echo $_SESSION['username']; ?></h2>                              
                                    
                                    <a href ='editprofile.php'>Edit Profile</a>
                
                              
                               <div id ="phpform">
                                  <?php 
                                   $con=mysqli_connect("sql1.njit.edu","vcc3","4aYwK2YO","vcc3");
                                // Check connection
                                if (mysqli_connect_errno())
                                {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }
                                $user = $_SESSION['username'];
                                //look at th euser logged in and show
                                $result = mysqli_query($con,"SELECT * FROM members WHERE username ='$user'");
                                
                               
                                                               
                                while($row = mysqli_fetch_array($result))                               
                               
                                  {
                                  echo "<img width='100px' height='100px' src='img/".$row['profilepic']."'>";                              						              
                                  echo "<p>Users memberID :"  . $row['memberID']  . "</p>";
                                  echo "<p>Username is :"     . $row['username']  . "</p>";
                                  echo "<p>Users email is :"  . $row['email']     . "</p>";
                                  echo "<p>First Name:"       . $row['first_name']. "</p>";
                                  echo "<p>Last Name:"        . $row['last_name'] . "</p>";
                                  echo "<p>Bio:"              . $row['info']      . "</p>";
								                  
                                  }
                                
                                                            
                                mysqli_close($con);
                                   
                                   
                                   ?>
                                </div>
                                  
                            </div>
                   </div>         


                               
                          	  	
                         
                         

<?php 
//include header template
require('layout/footer.php'); 
?>
