<!DOCTYPE html

/*
Section 1 Team 7
Christopher Batoon, Mac Rommel Bautista, Hikari Matsubara, Lauren Lee

Credits:
w3schools for the CSS layout and html webpage template
Font awesome for the icons
*/


<html>

<head>
    
</head>
<body>
    
<!--Start of header-->       
<?php require ("header.php");?>
    


<!--Start of body-->    
<div class="row">
  <div class="topcolumn">
    <div class="card">
      <h3>taco tuesday special every week </h3>
      <h5>Click banner below for details</h5>
      <div class="fakeimg" style="height:100%; padding:20px;"><center><img src="taco4.jpg" width=100% height=400px></center></div>
      <p><p><p>
    </div>

  </div>
  <div class="leftcolumn">
    <div class="card">
      <h3>See full menu </h3>
      <div class="fakeimg" style="height:100%; padding:20px;"><img src="menu2.png" width=100% height=350px></div>
    </div>

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>Search</h3>
      <div class="fakeimg" style="height:100%;padding:20px;">
    <div class="search-container">
    <form action="index.php">
      <input type="text" placeholder="Search.." name="search">
      <input type="submit" name="search">
    </form>    
    </div>
    </div>
    <div class="card">
      <h3>Blog Posts</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
  </div>
</div>

<!--Start of footer-->    
<?php require ("footer.php");?>


</body>
</html>
