<?php 
	include_once('./start.php');

	if(!App\Auth::isLoggedIn())
	{
	  header('Location: login.php');
	}

    if(!App\Auth::isUser('admin')){
    	App\Session::set('failed', "Unauthorized to add course");
    	header('Location: bookCourses.php');
    }
	require_once("./includes/individual-header.php");

?>

<div class="container-fluid">
	<br>
	<h3 class="text-center">Add New Course</h3>
	<div class="row">
		
		<div class="m-auto w-50">
			<form action="form/course.php" method="POST" accept-charset="utf-8">
				<div class="form-group">
					<label >Title</label>
					<input required="required" name="title" class="form-control" type="text" />
				</div>
				<div class="form-group">
					<label >Certification</label>
					<input required="required" name="certification" class="form-control" type="text" />
				</div>
				<div class="form-group">
					<label >Duration</label>
					<input required="required" name="duration" class="form-control" type="text" />
				</div>
				<div class="form-group">
					<label >Price</label>
					<input required="required" name="price" class="form-control" type="number" />
				</div>
				<input type="hidden" name="addcourse"/>
				<button type="submit" class="btn btn-primary">Add Course</button>
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


