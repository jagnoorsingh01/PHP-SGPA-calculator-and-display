<?php
    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href=".css" type="text/css" >



</head>
<div class="div">
<body>
<?php
echo '
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <div class="container"><div class="col-m-6">
<form class="form" id="form" method="POST" action="#" >
<center>
 
ROLL NO: <br>
<input name="rollno" type="text" class="roll_no" id="roll_no" >
<br>
NAME:<br>
<input name="name" type="text" class="name" id="name" required>

<br>
<hr>

<center>
MARKS
</center>
DSPM
<br>
Internal:<br>
<input name="dspm_i" type="text" class="i" id="dspm_i" required>
<br>
External:<br>
<input name="dspm_e" type="text" class="i" id="dspm_e" required>
<br>

IM
<br>
Internal:<br>
<input name="im_i" type="text" class="i" id="im_i" required>
<br>
External:<br>
<input name="im_e" type="text" class="i" id="im_e" required>
<br>

OOPS
<br>
Internal:<br>
<input name="oops_i" type="text" class="i" id="oops_i" required>
<br>
External:<br>
<input name="oops_e" type="text" class="i" id="oops_e" required>
<br>

DCLD
<br>
Internal:<br>
<input name="dcld_i" type="text" class="i" id="dcld_i" required>
<br>
External:<br>
<input name="dcld_e" type="text" class="i" id="dcld_e" required>
<br>

SPA
<br>
Internal:<br>
<input name="spa_i" type="text" class="i" id="spa_i" required>
<br>
External:<br>
<input name="spa_e" type="text" class="i" id="spa_e" required>
<br>

<br /><b> Practicals </b> <br /><br />

DCLD <br />
Internal : <br />
<input name="dcld_pi" type="text" class="i" id="dcld_pi" required> <br />
External : <br />
<input name="dcld_pe" type="text" class="i" id="dcld_pe" required> <br />

IM <br />
Internal : <br /> 
<input name="im_pi" type="text" class="i" id="im_pi" required> <br />
External : <br />
<input name="im_pe" type="text" class="i" id="im_pe" required> <br />

OOPS <br />
Internal :<br />
<input name="oops_pi" type="text" class="i" id="oops_pi" required> <br />
External :<br />
<input name="oops_pe" type-"text" class="i" id="oops_pe" required> <br />

DSPM <br />
Internal :<br />
<input name="dspm_pi" type="text" class="i" id="dspm_pi" required> <br />
External :<br />
<input name="dspm_pe" type-"text" class="i" id="dspm_pe" required> <br /> <br />


WorkShop <br />
Internal :<br />
<input name="ws_i" type="text" class="i" id="ws_i" required> <br />
External :<br />
<input name="ws_e" type-"text" class="i" id="ws_e" required> <br /> <br />






<input name="submit_btn" type="submit" value="SUBMIT"   id="submit" class="btn btn-primary">
<br>
<br></form>
<form action="project_login.php" method="post">
<button type="submit" class="btn btn-primary">log out</button>
</center>
</form>   <br><center>
<form action="project_view_all.php" method="post">
<button type="submit" class="btn btn-primary">view result of all</button>
</center>
</form></div></div></center>
';



    if(isset($_POST['submit_btn'])) {
    	//echo "<script>alert ('working') </script>";
        
               function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

        
    	$rollno =test_input($_POST['rollno']);
    	$name = test_input($_POST['name']);
    	$dspm_i = test_input($_POST['dspm_i']);
    	$dspm_e = test_input($_POST['dspm_e']);
    	$im_i = test_input($_POST['im_i']);
    	$im_e = test_input($_POST['im_e']);
    	$oops_i = test_input($_POST['oops_i']);
    	$oops_e = test_input($_POST['oops_e']);
    	$dcld_i = test_input($_POST['dcld_i']);
    	$dcld_e = test_input($_POST['dcld_e']);
    	$spa_i = test_input($_POST['spa_i']);
        $spa_e = test_input($_POST['spa_e']);
        $dcld_pi=test_input($_POST['dcld_pi']);
        $dcld_pe=test_input($_POST['dcld_pe']);
        $im_pi=test_input($_POST['im_pi']);
        $im_pe=test_input($_POST['im_pe']);
        $oops_pi=test_input($_POST['oops_pi']);
        $oops_pe=test_input($_POST['oops_pe']);
        $dspm_pi=test_input($_POST['dspm_pi']);
        $dspm_pe=test_input($_POST['dspm_pe']);
        $ws_i=test_input($_POST['ws_i']);
        $ws_e=test_input($_POST['ws_e']);

 
        
        
        
        $dspm=$dspm_i + $dspm_e;
        $im=  $im_i + $im_e;
        $oops=$oops_i + $oops_e;
        $dcld=$dcld_i + $dcld_e;
        $spa=$spa_i + $spa_e;
        $ws=$ws_i +$ws_e;
        
        $dcld_p=$dcld_pi+$dcld_pe;
        $im_p=$im_pi+$im_pe;
        $oops_p=$oops_pi + $oops_pe;
        $dspm_p=$dspm_pi+$dspm_pe;

        

        function grade($sub,$crd){
            if($sub>=90 && $sub<=100){
                $gr='O';
            }
            elseif($sub>=80 && $sub<90){
                $gr='A+';
            }
             elseif($sub>=70 && $sub<80){
                $gr='A';
            }
             elseif($sub>=60 && $sub<70){
                $gr='B+';
            }
             elseif($sub>=50 && $sub<60){
                $gr='B';
            }
             elseif($sub>=45 && $sub<50){
                $gr='C';
            }
             elseif($sub>=40 && $sub<45){
                $gr='P';
            }
             elseif($sub<40){
                $gr='F';
             }
            
            
        

              switch($gr){
    case 'O':  $grade_point=10; break;
    case 'A+': $grade_point=9; break;
    case 'A':  $grade_point=8; break;
    case 'B+': $grade_point=7; break;
    case 'B':  $grade_point=6; break;
    case 'C' : $grade_point=5; break;
    case 'P' : $grade_point=4; break;
    case 'F' : $grade_point=0; break;
   }

    $credit_point=$grade_point * $crd;
    return $credit_point;
        
 
        }
        
        
        
        
function grade_practicals($sub,$crd){
            if($sub>=45 && $sub<=50){
                $gr='O';
            }
            elseif($sub>=40 && $sub<45){
                $gr='A+';
            }
             elseif($sub>=35 && $sub<40){
                $gr='A';
            }
             elseif($sub>=30 && $sub<35){
                $gr='B+';
            }
             elseif($sub>=25 && $sub<30){
                $gr='B';
            }
             elseif($sub>=22.5 && $sub<25){
                $gr='C';
            }
             elseif($sub>=20 && $sub<22.5){
                $gr='P';
            }
             elseif($sub<20){
                $gr='F';
             }
            
            
        

              switch($gr){
    case 'O':  $grade_point=10; break;
    case 'A+': $grade_point=9; break;
    case 'A':  $grade_point=8; break;
    case 'B+': $grade_point=7; break;
    case 'B':  $grade_point=6; break;
    case 'C' : $grade_point=5; break;
    case 'P' : $grade_point=4; break;
    case 'F' : $grade_point=0; break;
   }

    $credit_point=$grade_point * $crd;
    return $credit_point;
        
 
        }        
          
        
$dspm_cp= grade($dspm,4);
$im_cp  = grade($im,4);
$oops_cp= grade($oops,4);
$dcld_cp= grade($dcld,4);
$spa_cp = grade($spa,4);
$ws_cp =  grade($ws,1);
        
        
        $dcld_p_cp=grade_practicals($dcld_p,2);
        $dspm_p_cp=grade_practicals($dspm_p,2);
        $im_p_cp=grade_practicals($im_p,2);
        $oops_p_cp=grade_practicals($oops_p,2);
        

 $sgpa=( $dspm_cp + $im_cp + $oops_cp + $dcld_cp + $spa_cp +$dcld_p_cp+$dspm_p_cp+$im_p_cp+$oops_p_cp +$ws_cp)/29;
 $sgpa_r=number_format((float)$sgpa, 2, '.', '');

        $connection=mysqli_connect('localhost','root','','sgpa_database');
        if($connection){echo "connected";}
        else{
            die('Databse connection failed');}
        
        $query="INSERT INTO student_info ";
        $query  .= "VALUES($rollno,'$name',$dspm_i,$dspm_e,$im_i,$im_e,$oops_i,$oops_e,$dcld_i,$dcld_e,$spa_i,$spa_e,$dcld_pi,$dcld_pe,$im_pi,$im_pe,$oops_pi,$oops_pe,$dspm_pi,$dspm_pe,$ws_i,$ws_e,$sgpa_r)";
        
        $result=mysqli_query($connection,$query);
       
echo "<script>alert ('SGPA $sgpa_r ') </script>";

    }
    
?>
</body>
</div>

</html>
