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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="#" method="post">
<div class="container" style="text-align: center;">
  <h2>Pending Patient List</h2>
  <br/>
  <br/>
             
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Patient Id Number</th>
        <th>Patient Name</th>
        <th>Time</th>
        <th>Contect Number</th>
        <th>Status</th>
        <th>Approved/Cencal</th>
      </tr>
    </thead>
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
    <tbody>
      <tr>
      <td><?php echo "$id";?></td>
    <td><?php echo "$name";?></td>
    <td><?php echo "$pdate";?></td>
    <td><?php echo "$mno";?></td>
    <td><?php echo "$status";?></td>
    <?php echo $id; ?>
   <input type="hidden" name="pid" value=<?php echo $id;?>   >
    <td><input type="submit" name="app" value="Approved" style="height: 0.50in;width:1in; border-radius:0.20in;">   
      <input type="submit" name="Cancel" value="Cancle" style="height: 0.50in;width:1in; border-radius:0.20in;"></td>
      </tr>
    </tbody>
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

<div class="container">
  <h2>Approved Patient List</h2>
             <br/>
             <br/>
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Patient Id Number</th>
        <th>Patient Name</th>
        <th>Time</th>
        <th>Contect Number</th>
        <th>Status</th>
        <th>Approved/Cencal</th>
      </tr>

    </thead>
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
<tbody>
      <tr>
      <td><?php echo "$id";?></td>
    <td><?php echo "$name";?></td>
    <td><?php echo "$pdate";?></td>
    <td><?php echo "$mno";?></td>
    <td><?php echo "$status";?></td>
   
   <input type="hidden" name="can" value=<?php echo $id; ?>  >
    <td><input type="submit" name="cancle" value="Cancle" ></td>
      </tr>
      <?php

    
}
if(isset($_POST['cancle']))
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
    </tbody>
  </table>
</div>
</form>
</body>
</html>
