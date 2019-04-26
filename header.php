<!--Link for fonts and icons-->    
<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
      integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' 
      crossorigin='anonymous'>
 <!--Link for stylesheet-->
 <link rel="stylesheet" type="text/css" href="style.css">

 
 <!--Start of title-->    
<div class="header">
  <h2>new express tacos</h2>
</div>
<!--Start of navigation links-->    
<div class="topnav">
  <a href="index.php"><i class='fas fa-home'></i> <small> </small>home</a>
  <a href="menu.php"><i class='fas fa-pepper-hot'></i><small> </small> menu</a>
  <a href="contact.php"><i class='fas fa-comment'></i><small> </small>contact</a>

  
<?php //NOTE: this is a sample login validation code that is just a placeholder
            //If a user is logged in, show cart icon and username
            if(isset($_COOKIE['username'])) {
                echo '<span style="float:right;"><a href="cart.php"><i class="fas fa-shopping-cart"></i><small> </small>Cart</a>';
                echo '<span style="float:right;"><a href="register.php">My Account</a>';
                print "<br><center><hr>Welcome, ".ucfirst($_COOKIE['username']).'!<br><hr></center>';  //customization: puts username on top header
            // Start the session if user is logged on
            if(isset($_COOKIE['username'])) {
                session_start();
                }
            }
            
            //If no user is logged in, show register icon only
            if(!isset($_COOKIE['username'])) {
                echo '<span style="float:right;"><a href="register.php"><i class="fas fa-user-alt"></i>'
                . '<small> </small>register or login<small> </small></a></span>';
            }
            //If user logs out, destroy session and end cookie. Also only show register icon only not cart
            if((@$_POST['logout']) == true) {
                setcookie('username',$_POST['username'],time()-808);
                session_save_path('.');
                session_start();
                session_destroy();
                echo '<span style="float:right;"><a href="register.php">sign in</a></span>';
                echo '<span style="float:right;"><a href="register.php"><i class="fas fa-user-alt"></i>'
                . '<small> </small>register or login<small> </small></a></span>';
            }
            
        ?>
</div>