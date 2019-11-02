<?php 
	require_once("./includes/individual-header.php");
	if(!App\Auth::isLoggedIn())
	{
	  header('Location: login.php');
	}

    if(App\Auth::isUser('user')){
    	App\Session::set('failed', "Unauthorized to edit course");
    	('Location: bookCourses.php');
    }
	$course = (new App\Course())->getCourseById( $_GET['id']);
	$course = $course[0];
?>

<div class="container-fluid">
	<br>
	<h3 class="text-center">Edit Course</h3>
	<div class="row">
		
		<div class="m-auto w-50">
			<form action="form/course.php" method="POST" accept-charset="utf-8">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
				<div class="form-group">
					<label >Title</label>
					<input required="required" name="title" class="form-control" type="text" value="<?php echo $course['title'] ?>" />
				</div>
				<div class="form-group">
					<label >Certification</label>
					<input required="required" name="certification" class="form-control" type="text"  value="<?php echo $course['certification'] ?>" />
				</div>
				<div class="form-group">
					<label >Duration</label>
					<input required="required" name="duration" class="form-control" type="text"  value="<?php echo $course['duration'] ?>" />
				</div>
				<div class="form-group">
					<label >Price</label>
					<input required="required" name="price" class="form-control" type="number"  value="<?php echo $course['price'] ?>" />
				</div>
				<input type="hidden" name="editcourse"/>
				<button type="submit" class="btn btn-primary">Update Course</button>
			</form>
		</div>
			
	</div>
	<br>
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


