<?php               

if(isset($_POST['submit'])){
    
    $rollno=$_POST['delete'];
    
    $connection=mysqli_connect('localhost','root','','sgpa_database');
    
    $query="DELETE FROM student_info WHERE rollno=$rollno";
    if(!$result=mysqli_query($connection,$query)){die("error in passing query");}
    else{echo"Successfully deleted the record of Roll No. $rollno";}
    
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body><br><div class="container"><div class="col-sm-6">
    <form action="project_delete.php" method="post">
       <div class="form-group"> <label for="username">Enter the Roll No. to delete the record</label>
        <input type="text" name="delete" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" id="sub" >
    </form>
     <br>
<form action="project_view_all.php" method="post">
<button type="submit" name="all_result" class="btn btn-primary">View Result of All</button>

</form></div></div>
<script>
    $(document).ready(function(){
        $("#sub").click(function(){
            alert("Press OK! to delete the record");
        })
    })
    </script>
</body>
</html>