<?php
$connection=mysqli_connect('localhost','root','','sgpa_database');
$query="SELECT * FROM student_info";
if(!$result=mysqli_query($connection,$query)){
    die("query passing failed");
}
while($row=mysqli_fetch_assoc($result)){
    echo " 
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
     
      
      <div class='container'>
      
      <table  border='2' class='table' style='text-align:center'>
            <legend> Result </legend>
      ROll No= $row[rollno]        <br>  Name=$row[name]
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
            
            
            
            
        </table> </div><br><div style='text-align:center'>SGPA:$row[sgpa]</div><br><br>";
}

echo'<center><form action="SGPA_copy.php" method="post">
<button type="submit" class="btn btn-primary">Go Back</button></center>
    </form><br>
    <center><form action="project_login.php" method="post">
<button type="submit" class="btn btn-primary">log out</button></center></form>
<br>
    <center><form action="project_delete.php" method="post">
<button type="submit" class="btn btn-primary">Delete Record</button></form></center>';

?>