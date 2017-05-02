<?php require('includes/config.php'); 


//define page title
$title = 'Homepage Page';

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
   
    <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h2> Welcome to CodeHub! <?php echo $_SESSION['username'];?></h2> 
                    
            <!-- Single button -->
                <div class="btn-group">
                <p> Use the drop down to navigate to your desired programming language page.</p>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Programming Language <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="javaLanguage.php">Java</a></li>
                    <li><a href="phpLanguage.php" >PHP</a></li>
                    <li><a href="javascriptLanguage.php">Javascript</a></li>
                    <li><a href="pythonLanguage.php">Python</a></li>
                    <li><a href="webdevLanguage.php" >HTML/CSS</a></li>
                    <li><a href="cLanguage.php">C</a></li>
                    <li role="separator" class="divider"></li>
                  
                  </ul>
                </div>                        
        </header>
    
  

        

     <!-- Projects Row -->

        <div class="row">



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=8Ib7nwc33uA&list=PLGLfVvz_LVvSaXCpKS395wbCcmsmgRea7&index=1">How to Install GCC</a></h4></blockquote>
 
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">
                 

                  <p>C Tutorial 1: How to Install GCC</p>
                    

                  <p>

                    

                    <a href="c1.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=nXvy5900m3M&list=PLGLfVvz_LVvSaXCpKS395wbCcmsmgRea7&index=2">C Video Tutorial</a></h4></blockquote>


                <div class="caption">

                  <p>C Tutorial 2: data type and format</p>

                  <p>

                    <a href="c2.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=r59xYe3Vyks&list=PLS1QulWo1RIbfTjQvTdj8Y6yyq4R7g-Al">Java Tutorial For Beginners 1 - Introduction and Installing the java (JDK) Step by Step Tutorial</a></h4></blockquote>

                <div class="caption">

                  <p>Java 1 - Introduction and Installing the java </p>

                  <p>


                    <a href="java1.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                 <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=gzlhm0jco0g&list=PLS1QulWo1RIbfTjQvTdj8Y6yyq4R7g-Al&index=2">Java Tutorial For Beginners 2 - Installing Eclipse IDE and Setting up Eclipse</a></h4></blockquote>
                
                <div class="caption">

                  <p>Java 2 - Installing Eclipse IDE and Setting up Eclipse</p>

                  <p>

                

                    <a href="java2.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>





            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=IX6mc9l6tY4&list=PLQVvvaa0QuDe8XSftW-RAxdo6OmaeL85M&index=2">Installing Python 3 - How to install/use both Python 2 and Python 3</a></h4></blockquote>
                
                <div class="caption">

                  <p>Python 3 : How to install/use Python 2 and Python 3</p>

                  <p>

             

                    <a href="python1.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">
              <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=UsCQXe1OHZk&list=PLQVvvaa0QuDe8XSftW-RAxdo6OmaeL85M&index=3">Python 3 Tutorial: Print Function and Strings</a></h4></blockquote>
                <div class="caption">

                  <p>Python 3 Tutorial: Print Function and Strings</p>

                  <p>

                

                    <a href="python2.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=08yflg_VVO8&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 1 # JavaScript Introduction</a></h4></blockquote>

                <div class="caption">

                  <p>Javascript Beginners 1 # JavaScript Introduction</p>

                  <p>

                    

                    <a href="javascript1.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

               <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=NfwqGwNMQeE&index=2&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 2 # Install and Configure Eclipse for JavaScript</a></h4></blockquote>

                <div class="caption">

                  <p>Javascript Beginners 2 # Install and Configure Eclipse</p>

                  <p   

                    <a href="javascript2.php" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>





        </div>
        <!-- /.row -->



        <hr>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CodeHub 2014</p>
                    <a href="logout.php">.</a>
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
y
