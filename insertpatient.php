<?php
include("con.php");

if(isset($_POST['submit']))
{
  $did=$_POST['hidden'];
    $dt=$_POST['date'];
   $time=$_POST['time'];
    $tm=$_POST['tm'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $sx=$_POST['sex'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $add=$_POST['address'];
    $name=$fname." ".$lname;
    $fulltime=$hr.$mn.$tm;
    $bd=$day."-".$month."-".$year;
    
    
    $sql=mysqli_query($con,"INSERT INTO `patient`(`docid`,`pdate`,`time`,`lname`,`dob`, `sex`, `mno`, `email`,`pass`, `add1`) VALUES ('$did','$dt','$time','$name','$bd','$sx','$mno','$email','$pass','$add')");
    if($sql)
    {
        echo "Data Inserted";
       
       
        
    }
    else{
        echo "Error";
    }

}

?>