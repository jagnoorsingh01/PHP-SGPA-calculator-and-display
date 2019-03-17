
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body><div class="container"><div class="col-m-6">
    
    <form action="project_display_student.php" method="post">
        <div class="form-group">
            <label for="username">ROLL NO</label>
            <input type="text" class="form-control" name="rollno" autofocus>
            </div>
        
            <div class="form-group">
            <label for="username">Password</label>
            <input type="password" class="form-control" name="password" id="password">
            </div>
            <?php echo "*students may leave this field empty"?><br><br>
            
        
            
            <input id="sub" type="submit" name="submit"  value="submit" class="btn btn-primary">        
    </form>
   
    
    
    
    
</div></div>
    
    </body> 
    
</html>









