<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="bootstrap-3.3.7/docs/favicon.ico">-->

    <title>Review Form</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">-->

    </head>
    
    <body>
		
<?php
        
    include "header.php";
	
    $reid=$_POST['reid'];
    $rep=$_POST['rep'];
    $pid=$_POST['pid'];
       
    
    $ins="INSERT INTO review (reid, report, pid)
	VALUES ('$reid', '$rep', '$pid')";
        
        $q=mysqli_query($dbcon,$ins);
        if (!$q) 
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-danger" role="alert">';
            printf("<strong>Error during insert:</strong> %s\n</div>", mysqli_errno($dbcon));
            echo "</div>";
            exit(); //Exiting upon error
        }
        
?>
    
    </body>
</html>