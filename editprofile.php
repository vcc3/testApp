<?php require('includes/config.php'); 


//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 


//define page title
$title = 'Edit profile Page';

//include header template
 
require('layout/header.php'); 
//--------------------------------------------------------

 



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
                        <a href="index.php">Home</a>
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
    <br>
    <br>
    <br>
    <br>

    
    <?php
         if(isset($_POST['update'])) {
        
            
          $servername = "sql1.njit.edu";
          $username = "vcc3";
          $password = "4aYwK2YO";
          $dbname = "vcc3";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
              $user=$_SESSION['username'];
              $firstname =$_POST['first_name'];
              $lastname=$_POST['last_name'];
              $bio=$_POST['bio'];
          
          $sql = "UPDATE members SET first_name='$firstname',last_name='$lastname',info='$bio' WHERE username='$user'";
          
          if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
                header('Location:memberpage.php');
          } else {
              echo "Error updating record: " . mysqli_error($conn);
          }
          

mysqli_close($conn);
}
?>
         
         
         
         
         
         
 
            <h1> Welcome <?php echo $_SESSION['username']; ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">First Name</td>
                        <td><input name = "first_name" type = "text" 
                           id = "first_name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Last Name</td>
                        <td><input name = "last_name" type = "text" 
                           id = "last_name"></td>
                     </tr>
                     <tr>
                        <td width = "100">Bio</td>
                        <td><input name = "bio" type = "text" 
                           id = "bio"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
        
    
    
    
    
    
    
    
    
    
    </div>
                     
<?php 
//include header template
require('layout/footer.php'); 
?>
