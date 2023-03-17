<?php
include("con.php");
?>
<?php

session_start();

$user=$_SESSION['email'];

$did="";

if(isset($_GET['submit']))
{
$did=$_GET['did'];

}
$sql=$con->query("SELECT * FROM `patient` WHERE `docid`='$user' AND `status`='Pending'");
if($sql)
{




if($sql->num_rows > 0)
{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    
    <title>PatientStatus</title>
</head>
<body>
    <form method="POST" action="#">
        
   <div style="height: 5in; width:16in; background-color:darkgrey;" >
   <table border="1" style="height: auto; width:16in; font-size:x-large;" align="center">
    <tr>
        <th>Patient Id Number</th>
        <th>Patient Name</th>
        <th>Time</th>
        <th>Contect Number</th>
        <th>Status</th>
        <th>Approved/Cencal</th>
        <th></th>
    </tr>
    <?php
while($row = $sql->fetch_assoc()){
    $id=$row['pid'];
    $name=$row['lname'];
    $pdate=$row['pdate'];
   $dob=$row['dob'];
    $sex=$row['sex'];
    $mno=$row['mno'];
    $email=$row['email'];
 $status=$row['status'];
    $pass=$row['pass'];
?>
<tr align="center">
    <td><?php echo "$id";?></td>
    <td><?php echo "$name";?></td>
    <td><?php echo "$pdate";?></td>
    <td><?php echo "$mno";?></td>
    <td><?php echo "$status";?></td>
   <input type="hidden" name="pid" value=<?php echo $id;?>   >
   <?php echo $id;?>
    <td><input type="submit" name="app" value="Approved" style="height: 0.50in;width:2.50in; border-radius:0.20in;">   
      <input type="submit" name="Cancel" value="Cancle" style="height: 0.50in;width:2.50in; border-radius:0.20in;"></td>
</tr>


    <?php

    
}
if(isset($_POST['app'])){

    $pid=$_POST['pid'];
    
    
$update=mysqli_query($con,"UPDATE `patient` SET `status`='Approved' WHERE `pid`='$pid';");
if($update){
echo "updated";
}else{
echo "Not Updated";
}

}
?>


<?php
}
else
{
    $errpt= "patient not found";
}
}

?>

</table>
   

   </div>
    </form>
   <?php


$sql=$con->query("SELECT * FROM `patient` WHERE `docid`='$user' AND `status`='Approved'");
if($sql)
{
if($sql->num_rows > 0)
{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    
    <title>PatientStatus</title>
</head>
<body>
    <form action="#" method="POST" >
        
   <div style="height: 5in; width:16in; background-color:darkgrey;" >
   <table border="1" style="height: auto; width:16in; font-size:x-large;" align="center">
    <tr>
        <th>Patient Id Number</th>
        <th>Patient Name</th>
        <th>Time</th>
        <th>Contect Number</th>
        <th>Status</th>
        <th>Approved/Cencal</th>
        <th></th>
    </tr>
    <?php
while($row = $sql->fetch_assoc()){
    $id=$row['pid'];
    $name=$row['lname'];
    $pdate=$row['pdate'];
   $dob=$row['dob'];
    $sex=$row['sex'];
    $mno=$row['mno'];
    $email=$row['email'];
 $status=$row['status'];
    $pass=$row['pass'];
?>
<tr align="center">
    <td><?php echo "$id";?></td>
    <td><?php echo "$name";?></td>
    <td><?php echo "$pdate";?></td>
    <td><?php echo "$mno";?></td>
    <td><?php echo "$status";?></td>
   
   <input type="hidden" name="can" value=<?php echo $id; ?>  >
    <td><input type="submit" name="can" value="Cancle" ></td>
    
</tr>


    <?php

    
}
if(isset($_POST['can']))
{
    $pid=$_POST['can'];
    echo $pid;


$cancle=mysqli_query($con,"UPDATE `patient` SET `status`='Cancle' WHERE `pid`='$pid';");
if($cancle)
{
    echo "Cancle Successfully";
}
else{
    echo "cancle Un Successfull";
}
}
?>


<?php

   
}
else
{
    $errp ="data not found";
}
}

   ?>
 

  </table>
   </div>
    </form>
    
</body>
</html>

