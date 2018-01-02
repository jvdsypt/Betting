<?php 
include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '341712032963400',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.11'
        });
          
        
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });  
          
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

      function statusChangeCallback(response){
        if(response.status === 'connected'){
          console.log('Logged in and authenticated');
          // bepalen welke velden je wil ontvangen in de response. 
          FB.api('/me?fields=name, email, picture', function(response){
            if(response && !response.error){
              console.log(response);
            }
          })
        }
        else{
          console.log('not authenticated');

        }
      }


      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

    </script>




  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
      <fb:login-button 
        scope="public_profile,email"
        onlogin="checkLoginState();">
      </fb:login-button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>


