<?php
include_once("./start.php");
if(!App\Auth::isLoggedIn())
{
  header('Location: login.php');
}
include("includes/individual-header.php");
include('includes/notification.php');

?>
<body>
 <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
 <div class="preloader">
  <div class="preloader-inner">
    <div class="preloader-top">
      <div class="preloader-top-sun">
        <div class="preloader-top-sun-bg"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-0"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-45"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-90"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-135"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-180"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-225"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-270"></div>
        <div class="preloader-top-sun-line preloader-top-sun-line-315"></div>
      </div>
    </div>
    <div class="preloader-bottom">
      <div class="preloader-bottom-line preloader-bottom-line-lg"></div>
      <div class="preloader-bottom-line preloader-bottom-line-md"></div>
      <div class="preloader-bottom-line preloader-bottom-line-sm"></div>
      <div class="preloader-bottom-line preloader-bottom-line-xs"></div>
    </div>
  </div>
</div>
<?php  include('includes/notification.php'); ?>

<div class="page">
  <!-- Basic Info-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-center">
        <div class="col-md-10 col-lg-7">
          <h3 class="title-costume block-1">Update Profile</h3>
          <br/>
          <br/>
          <form method="post" action="form/user.php">
            <div class="form-group">
              <label class="h4">Name</label>
              <input class="form-control" type="text" name="name" value="<?php echo \App\Session::get('name') ?>">
            </div>
            <div class="form-group">
              <label class="h4">Phone</label>
              <input class="form-control" type="number" name="contact" value="<?php echo \App\Session::get('contact') ?>" />
            </div>
            <input class="form-control" type="hidden" name="profile" value="1" />

            <div class="form-group">
              <button class="button button-lg button-primary mt-lg-40">Submit</button>
            </div>
          </form>

        </div>
        <div class="col-md-10 col-lg-5 position-relative">
          <div class="figure-1"><img src="images/about-1-457x566.png" alt="" width="457" height="566"/>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


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