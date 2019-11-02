<?php
include_once("./start.php");
include_once("includes/individual-header.php");
include('includes/notification.php');

$allCourses = (new App\Course() )->getAllCourse();

if(App\Auth::isLoggedIn())
{
  $bookedCourses = (new App\Course())->getCourseByUser($_SESSION['user']['id']);

  if($_SESSION['type'] == 'user'){
    $bookedCoursesId = array_map(function($item){
      return $item['course_id']; 
    },$bookedCourses);
  }

}

?>

  <!-- Basic Info-->
  <div class="container-fluid" style="min-height:80vh">
    <br>
    <div class="d-flex flex-row justify-content-between py-2" >
    <?php if(App\Auth::isUser('user')): ?>
    <h5 class="h3 btn"> 
      <a class="fas fa-hand-point-right" target="_blank" href="bills.php">View Your Bill </a>
    </h5>
    <?php endif ?>
    <?php if(App\Auth::isUser('admin')): ?>
    <h5 class="h3 btn"> 
      Booking Details
    </h5>
    <?php endif ?>
    <h5 class="mt-0 btn btn-link"> <a class="fas fa-hand-point-right" href="profile.php">View Your Profile </a></h5>
    </div>

    <div class="d-flex flex-row justify-content-between py-2">
    <?php if(App\Auth::isUser('admin')): ?>
    <a class="btn " href="addcourse.php"><i style="font-style: normal;" class="fa fa-plus"></i> Add New Course</a>
    <?php endif ?>

    <?php if(App\Auth::isUser('admin')): ?>
    <a class="btn " href="changerole.php"><i style="font-style: normal;" class="fa fa-plus"></i> Change User Role</a>
    <?php endif ?>
    </div>
    <table class="table">
      <thead>
        <tr >
          <th>Id</th>
          <th>Training Course</th>
          <th>Certification</th>
          <th>Duration</th>
          <th>Price(Monthly)</th>
          <?php if(App\Auth::isLoggedIn() && App\Auth::isUser('admin')): ?>
            <th>Students Enrolled</th>  
            <th>
              Action
            </th>
          <?php endif ?>
          <?php App\Auth::isUser('user') ?>
          <?php if(App\Auth::isLoggedIn() && App\Auth::isUser('user')): ?>
          <th>Booking Status</th>  
          <?php endif ?>
        </tr>
      </thead>
      <tbody>

        <?php				
        foreach($allCourses as $key => $training)
        {	
         ?>
         <tr>	
          <td ><?= $key+1 ?></td>
          <td ><?php echo $training['title'] ; ?></td>
          <td><?php echo $training['certification'] ; ?></td>
          <td><?php echo $training['duration'] ; ?></td>
          <td>$ <?php echo $training['price'] ; ?></td>
          <?php if(App\Auth::isLoggedIn() && $_SESSION['type'] == 'user'): ?>
            <td>

              <?php
                $url = "form/course.php?course_id=".$training['id'];
                $url .= (in_array($training['id'], $bookedCoursesId)) ? "&remove=1" :"#";
              ?>
              <a href="<?php echo $url ?>"
                <?php if(in_array($training['id'], $bookedCoursesId)): ?>
                  onclick="Javascript: return confirm('Are you sure you want to unbook this course?');"

                  <?php else: ?>

                    onclick="Javascript: return confirm('Are you sure you want to book this course?');"
                  <?php endif; ?>

                  class='btn btn-primary'>
                  <span class='' aria-hidden='true'></span>
                  <span>
                   <strong>
                     <?=
                     (in_array($training['id'], $bookedCoursesId)) ? "Unbook":"Book Now"
                     ?>
                   </strong>
                 </span>
               </a>
           </td>
          <?php endif; ?>
          <?php if(App\Auth::isLoggedIn() && $_SESSION['type'] == 'admin'): ?>
            <td>
              <?php 
              $bookedCourses = (new App\User())->getTotalBookingByCourse([ "course" => $training['id']]);
              echo $bookedCourses['total'][0];
              ?>
            </td>

            <td>
              <a href="editcourse.php?id=<?php echo $training['id'];?>">Edit</a>
            </td>

          <?php endif; ?>



        </tr>

        <?php
      }
      ?>

    </tbody>
  </table>

</div>

<script>
  function loadCookie() {
    if (confirm("Do you want to accept our cookie?")) {
      document.cookie = "accept=assignment";
    }
  }
</script>
<?php    

include("includes/footer.php");
?>

