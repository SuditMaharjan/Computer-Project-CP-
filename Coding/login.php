<?php
include_once("start.php");

if(App\Auth::isLoggedIn())
{
  header('Location: index.php');
}

include("includes/individual-header.php");
include('includes/notification.php');
?>
<body>

  <form class="from-horizontal col-lg-6 offset-lg-3"  method="post" action="form/login.php" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-9">
        <br><img src="images/admin.png" width=100px><br>
        <br><label>Email Address</label><br>
        <input type="text" name= "email" class="form-control" required placeholder="Email address">
      </div>
      <br>                              
      <div class="col-lg-9">
        <label>Password</label><br>
        <input type="password" name= "password" class="form-control" required placeholder="Password">
      </div>
    </div>
    <br>

    <div class="form-group">
      <input type="submit" name= "login" value="login" class="btn btn-primary" />                     </div>
      <div class="container" >
        <span class="psw">Not member yet? <a href="register.php">Sign up</a></span>
      </div>

    </form>
    
    <?php    
    
    include("includes/footer.php");
    ?>
    <script>
      function loadCookie() {
        if (confirm("Do you want to accept our cookie?")) {
          document.cookie = "accept=assignment";
        }
      }
    </script>


  </body>