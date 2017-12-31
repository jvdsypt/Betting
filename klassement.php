<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

$dbhostname='brackemannen.be.mysql';
$dbpassword='k74TVAhNhD4UK5EBpoLgHePn';
$dbuser = 'brackemannen_be';  
$dbname= 'brackemannen_be';
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WK2018 Betting</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="fixed" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">WK 2018 Betting</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <!-- <li><a href="index.php/#Uitleg">Uitleg</a></li>
          <li><a href="#Uitslagen">Uitslagen</a></li>
          <li><a href="#Matchen">Matchen</a></li>
          <li><a href="#Klassement">Klassement</a></li>
          <li><a href="#Twitterfeed">Twitterfeed</a></li>
          <li><a href="#contact">Contact</a></li> -->
          <li><a href="index.php">Home</a>
          <li><a href="index.php?logout='1'">logout</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <!--   <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <h1>WK 2018 New Betting Platform</h1>
          <p>Lorem ipsum dolor sit ametcursus magna vel scelerisque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.nisl consectetur et.</p>
          <a href="#Uitslagen" class="btn btn-large">Ga naar uitslagen!</a> </div> -->
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- uitleg section -->
<section id="Uitleg" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <br>
      <h3>Klassement</h3>
      <p>Check je plaats in het !</p>
    </div>
  </div>
</section>


<section id="fullKlassement" class="fullKlassement">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <table class="table table-bordered table-hover">
        <thead class="thead-inverse">
          <tr>  
            <td>#</td>
            <td>Speler</td>
            <td>Uitslag Correct</td>
            <td>Winnaars Correct</td>
            <td><b>Totaal</b></td>
          </tr>
        </thead>
        <tbody>
          <?php
              define('MYSQL_ASSOC',MYSQLI_ASSOC);
              $conn = new mysqli($dbhostname, $dbuser, $dbpassword, $dbname);
              if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
              $sql = "SELECT * FROM klassement ORDER BY totaal";
             $result = mysqli_query($conn, $sql);
               if (!$result) {
                  printf("Error: %s\n", mysqli_error($conn));
                  exit();
              }
              while($data = mysqli_fetch_array($result)){
                $ranking = 1;
                echo'
                    <tr>
                        <td>1</td>
                        <td>'.$data['username'].'</td>
                        <td>'.$data['matchenCorrect'].'</td>
                        <td>'.$data['winnaarCorrect'].'</td>
                        <td>'.$data['totaal'].'</td>
                    </tr>
                ';
                $ranking++;
              }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>



<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Our Office Location</h5>
          <p>Collins Street West Victoria 8007 Australia.<br>
            1800 1234 56789 / 98532100987<br>
            support@lexis.com</p>
          <p>Copyright © 2015 Lexis Inc. All Rights Reserved. Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a></p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Services We Offer</h5>
          <p>
          <ul>
            <li><a href="#">Digital Strategy</a></li>
            <li><a href="#">Websites</a></li>
            <li><a href="#">Videography</a></li>
            <li><a href="#">Social Media</a></li>
            <li><a href="#">User Experience</a></li>
          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Share with Love</h5>
          <ul class="footer-share">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<!-- mainKlassement.js is volledig zelfde als main.js maar de code die fixed verwijderd wanneer je op top van pagina bent is eruit gehaald. Zo blijft de banner fixed voor de hele pagina -->
<!--  <script src="js/mainKlassement.js"></script> -->
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>