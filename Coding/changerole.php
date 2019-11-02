<?php
include_once("./start.php");
include_once("includes/individual-header.php");


include('includes/notification.php');
if(!App\Auth::isLoggedIn())
{
  header('Location: login.php');
}

if(App\Auth::isUser('user'))
{
  header('Location: bookCourses.php');
}
$allUsers = (new App\User() )->getAll();


?>
<body>

  <!-- Basic Info-->
  <div class="container-fluid">
    <br>
    <div class="d-flex flex-row justify-content-between">
    <?php if(App\Auth::isUser('user')): ?>
    <h5 class="h3 btn"> 
      <a class="fas fa-hand-point-right" target="_blank" href="bills.php">View Your Bill </a>
    </h5>
    <?php endif ?>
    <?php if(App\Auth::isUser('admin')): ?>
    <h5 class="h4"> 
      User Roles
    </h5>
    <?php endif ?>
    <h5 class="mt-0 btn btn-link"> <a class="fas fa-hand-point-right" href="profile.php">View Your Profile </a></h5>
    </div>

    <div class="d-flex flex-row justify-content-between">
    <?php if(App\Auth::isUser('admin')): ?>
    <a class="btn " href="addcourse.php"><i style="font-style: normal;" class="fa fa-plus"></i> Add New Course</a>
    <?php endif ?>

    </div>
    <table class="table">
      <thead>
        <tr >
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        <?php				
        foreach($allUsers as $key => $user)
        {	
         ?>
         <tr>	
          <td ><?= $key+1 ?></td>
          <td ><?php echo $user['name'] ; ?></td>
          <td><?php echo $user['email'] ; ?></td>
          <td><?php echo $user['type'] ; ?></td>
          <td>
            <form action="form/user.php" method="POST" accept-charset="utf-8">
              <input type="hidden" name="id" value="<?php echo $user['id'] ; ?>">
              <input type="hidden" name="role" value="<?php echo ($user['type'] == 'admin') ? 'user' : 'admin' ; ?>">
              <input type="hidden" name="changerole" value="1">
              <button class="btn btn-primary" type="submit">Change Role</button>
            </form>
          </td>
        </tr>

        <?php
      }
      ?>

    </tbody>
  </table>

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