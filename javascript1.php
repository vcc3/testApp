<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Javascript Tutorial For Beginners 1 # JavaScript Introduction';

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
	  <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">C
                    <small>How to Install GCC</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-9 portfolio-item">
                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=08yflg_VVO8&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 1 # JavaScript Introduction</a></h4></blockquote>
                <div class="caption">
                  <p>Javascript Tutorial For Beginners 1 # JavaScript Introduction</p>
                  <p>
                    <button>Add to my list!</button>
                   
                  </p>
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
