<!DOCTYPE html

/*
Section 1 Team 7
Christopher Batoon, Mac Rommel Bautista, Hikaru Matsubara, Lauren Lee

Credits:
w3schools for the CSS layout and html webpage template
Font awesome for the icons
*/
 

<html>

<head>

</head>
<body>
    
<!--Start of header-->    

<?php require("header.php");?>

<!--Start of body-->    

<div class="row">
    
<!-- Below is placeholder form but real php and form to be placed here -->

  <div class="leftcolumn" style="width:50%">
    <div class="card">
        <center> <h3>Register Here</h3> 
      <div class="fakeimg" style="height:300px;">  
      <form action="/action_page.php">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Username: <input type="text" name="name">
  <br><br>
  Password: <input type="text" name="name">
  <br><br>
  
      <br>
      <input type="submit" name="submit" value="Register"></center<
      </form> 
      </div>
    </div>
  </div>
  <div class="rightcolumn" style="width:50%">
    <div class="card">
      <h3>Login</h3>
      <div class="fakeimg" style="height:300px;">
    <div class="search-container">
    <form action="/action_page.php">
      Username: <input type="text" name="username" value="">
      <br><br>
      Password: <input type="text" name="password" value="">
      <br><br>
      <input type="submit" name="submit" value="Login">
    </form>    
    </div>
    </div>
  </div>
</div>

    
<!--Start of footer-->    
    
<?php require ("footer.php");?>


</body>
</html>
