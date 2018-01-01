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
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">WK 2018 Betting</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#Uitleg">Uitleg</a></li>
          <li><a href="#Uitslagen">Uitslagen</a></li>
          <li><a href="#Matchen">Matchen</a></li>
          <li><a href="#Klassement">Klassement</a></li>
          <li><a href="#Twitterfeed">Twitterfeed</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="index.php?logout='1'">logout</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>WK 2018 New Betting Platform</h1>
        <p>Lorem ipsum dolor sit ametcursus magna vel scelerisque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.nisl consectetur et.</p>
        <a href="#Uitslagen" class="btn btn-large">Ga naar uitslagen!</a> </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- uitleg section -->
<section id="Uitleg" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Hier komen mededelingen</h3>
      <p>Nog maar 2 dagen om de bonussen in te dienen!</p>
    </div>
  </div>
</section>
<!-- Uitleg section --> 
<!-- Uitslagen section -->
<section id="Uitslagen" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>Match 1 (foto zijn vlagen van de ploegen)</h5>
          <p>Online wel ergens een feed te vinden</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Match 2 (foto zijn vlagen van de ploegen)</h5>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec nulla non metus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>Match 3 (foto zijn vlagen van de ploegen)</h5>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec nulla non metus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5>Match 4 (foto zijn vlagen van de ploegen)</h5>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec nulla non metus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>Match 5 (foto zijn vlagen van de ploegen)</h5>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec nulla non metus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Match 6 (foto zijn vlagen van de ploegen)</h5>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec nulla non metus.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Uitslagen section --> 
<!-- matchen section -->
<section id="Matchen" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-1.jpg" class="work-box"> <img src="images/work-1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-2.jpg" class="work-box"> <img src="images/work-2.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-3.jpg" class="work-box"> <img src="images/work-3.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-5.jpg" class="work-box"> <img src="images/work-5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-6.jpg" class="work-box"> <img src="images/work-6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-7.jpg" class="work-box"> <img src="images/work-7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-8.jpg" class="work-box"> <img src="images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- Matchen section --> 
<?php include('server.php') ?>

<!-- Klassement section -->
<section id="Klassement" class="section teams">
  <div class="container">
    <div class="row">

      <?php
        $sqlklassement = "SELECT klassement.username, klassement.totaal, users.pic_path FROM klassement inner join users on klassement.username = users.user_name ORDER BY totaal DESC LIMIT 4";
        $results = mysqli_query($db, $sqlklassement);
        if (!$results) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
          }
        $loop = 1;
        while($data = mysqli_fetch_array($results)){
        echo '
                    <div class="col-md-3 col-sm-6">
                      <div class="person"><img src="images/'.$data['pic_path'].'" alt="" class="img-responsive">
                        <div class="person-content">
                          <h4>'.$data['username'].'</h4>
                          <h5 class="role">'.$loop.'e plaats</h5>
                          <p>'.$data['totaal'].' punten</p>
                        </div>
                        <ul class="social-icons clearfix">
                          <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                          <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                          <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                          <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                          <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                        </ul>
                      </div>
                    </div>';
            $loop++;
          }
        ?>
      <!-- <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Player 1</h4>
            <h5 class="role">1ste plaats</h5>
            <p>totaal aantal punten </p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Player 2</h4>
            <h5 class="role">2de plaats</h5>
            <p>Totaal aantal punten</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Player 3</h4>
            <h5 class="role">3de plaats</h5>
            <p>Totaal aantal punten</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Player 4</h4>
            <h5 class="role">4de plaats</h5>
            <p>totaal aantal punten</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
    </div> -->
    <br>
    <div class='row'>
      <center>
        <a href="klassement.php" class="btn btn-large">Volledige klassement</a>        
      </center>
    </div>
  </div>
</section>
<!-- our Klassement section --> 
<!-- Twitterfeed section -->

<section id="Twitterfeed" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <!-- cards = hidden zou normaal foto moeten negeren maar werkt niet -->
                <a class="twitter-timeline"
                  href="https://twitter.com/GaryLineker"
                  data-tweet-limit="1"
                  cards = hidden>
                  </a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                <p>Latest tweet by @GaryLineker</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                            <a class="twitter-timeline"  href="https://twitter.com/hashtag/WorldCup2018" data-widget-id="947215590632185858">Tweets over #WorldCup2018</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <p>Latest tweet #WorldCup2018</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur...." </h1>
                <p>Andi Simond, Global Corporate Inc</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elitPhasellus non dolor nibh. Nullam elementum tellus pretium feugiat. Cras dictum tellus dui sollcitudin." </h1>
                <p>Kristy Gabbor, Martix Media</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- twitterfeed section --> 

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <h5>Shoot An Email</h5>
        <p>We are happy to talk you through any projects or run live demos for those wishing to see what it is to use our products and how they look like.</p>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Project Details..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send your query">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 

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
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>