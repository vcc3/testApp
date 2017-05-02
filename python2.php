<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Python 3 Tutorial: Print Function and Strings';

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
                      <a href="logout.php">Logout</a>
                    </li>
                    <li>
                      <a href="myVideo.php">My Videos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
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
              $videoName  =mysqli_real_escape_string($conn,$_POST['videoname']);          
              $url        =mysqli_real_escape_string($conn,$_POST['url']);
          
         
          $sql = "INSERT INTO video (username,url,videoname)VALUES ('$user', '$url','$videoName')";
          
          if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
              header('Location:myVideo.php');
          } else {
              echo "Error updating record: " . mysqli_error($conn);
          }
          

mysqli_close($conn);
}
?>
         
	  <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Python
                    <small>Python 3 Tutorial: Print Function and Strings</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-9 portfolio-item">
                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=UsCQXe1OHZk&list=PLQVvvaa0QuDe8XSftW-RAxdo6OmaeL85M&index=3">Python 3 Tutorial: Print Function and Strings</a></h4></blockquote>
                <div class="caption">
                  <p>Python 3 Tutorial: Print Function and Strings</p>
                  <form method = "post" action = "<?php $_PHP_SELF ?>">
                    <input type="hidden" name="url" id ="url" value="python2.php">
                    <input type="hidden" name="videoname" id ="videoname" value=" Python 3 Tutorial">
                    <input name = "update" type = "submit"  id = "update" value = "Add to my list!"> 
                   </form>
                </div>
            </div>
        </div>
        <!-- /.row -->



        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

                                      
                 
                         

<?php 
//include header template
require('layout/footer.php'); 
?>
