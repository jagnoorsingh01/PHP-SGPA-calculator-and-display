<?php
if(isset($_POST['submit'])){
    
      function test_input($data){
         $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   } 
   $rollno=test_input($_POST['rollno']);
   $password=test_input($_POST['password']);



    $connection=mysqli_connect('localhost','root','','sgpa_database');
    
    if(!$connection){
    
    
        die("Database connection failed");
        
        
    }
        
   
    
$query="SELECT * FROM student_info WHERE rollno ='$rollno'";
    
    $result=mysqli_query($connection,$query);
    
    
    
    if($row=mysqli_fetch_assoc($result)){
      echo " 
      
 
      
      <div class='container'><br><br>
       Name: $row[name]<br>Roll No: $row[rollno]<br>
      <table  border='2' class='table' style='text-align:center'>
            <legend> Result </legend>
       
            <tr>
            <td rowspan='2' style='vertical-align:middle'>SUBJECTS</td>
            <td colspan='2'> Internal </td>
            <td colspan='2'> External </td>
           
            </tr>
            
            <tr>
            
            <td> Theory </td>
            <td> Practical </td>
            <td> Theory </td>
            <td>Practical</td>
            
         
            
            
            </tr>
            
            <tr>
            <td>DCLD</td><td>$row[dcld_i]</td><td>$row[dcld_pi]</td><td>$row[dcld_e]</td><td>$row[dcld_pe]</td>
            </tr>
            
            <tr> 
            <td> DSPM </td><td>$row[dspm_i]</td>
            <td>$row[dspm_pi]</td><td>$row[dspm_e]</td><td>$row[dspm_pe]</td>
            </tr>
            
            <tr>
            <td> IM </td><td>$row[im_i]</td>
            <td>$row[im_pi]</td><td>$row[im_e]</td><td>$row[im_pe]</td>
            </tr>
            
            <tr>
            <td> OOPS </td><td>$row[oops_i]</td>
            <td>$row[oops_pi]</td><td>$row[oops_e]</td><td>$row[oops_pe]</td>
            </tr> 
            
             <tr>
            <td> SPA </td><td>$row[spa_i]</td>
            <td>N.A.</td><td>$row[spa_e]</td><td>N.A.</td>
            </tr> 
            
             <tr>
            <td> Workshop </td><td>N.A.</td><td>$row[ws_i]</td></td><td>N.A</td>
            <td>$row[ws_e]</td>
            </tr> 
            
            
            
            
        </table> </div><br><div style='text-align:center'>SGPA:$row[sgpa]</div>";
    }
    else if($rollno=="admin123"&& $password=="qwerty"){header("location:SGPA_COPY.php");}
    else{echo '<script>alert("invalid entry");</script>';
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head> <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form action="project_login.php" method="post"><br>
      <button type="submit" class="btn btn-primary">Go Back</button>
  </form>
</body>
</html>
