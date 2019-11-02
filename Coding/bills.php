<?php 
require_once('./start.php');

if(App\Auth::isLoggedIn())
{

    $courses = (new App\Booking())->getUserBookedCourses(App\Auth::getUser()['id']); 
     
}else{
    header("Location: index.php");
}
?>

<html>
<head>
<title>
    Billls
</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-light">
     
    <div class="container" style="display: flex;height: 100vh; flexDirection: column; justifyContent: center">
        <div class="w-75 m-auto" style="height:70vh">
            <p class="h4 text-center">Bill Details</p>
            <br />
            <p>
                <strong>Name: </strong> <?php echo ucfirst(App\Session::get('name')) ?>
            </p>   
               
            <table class="table table-hover">
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    <?php $total = 0;?>
                    <tr>
                        <?php foreach($courses as $key => $cours): ?>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $cours['title'] ?></td>
                        <td>$ <?php echo $cours['price'] ?></td>
                        <?php $total +=$cours['price'];  ?>
                    </tr>

                        <?php endforeach ?>

                </tbody>   
                <tfoot>
                    <tr style="border-top: 1px solid dashed">
                        <td colspan="2" style="text-align: right; padding-right: 4rem">Total</td>
                        <td>$ <?= $total  ?></td>
                    </tr>  
                </tfoot>

            </table>
        </div> 
        
        
    </div>
    
</body>    

</html>