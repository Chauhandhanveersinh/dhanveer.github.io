<?php

include("con.php");
include("navbar.php");
session_start();

 $check=$_SESSION['email'];
if($check !== null)
 {
      $user=$_SESSION['email'];
      $us=$_SESSION['us'];
  $pass=$_SESSION['pass'];
}
else{
    if(isset($_POST))
    {
    $user=$_POST['email'];
    $us=$_POST['op'];
    $pass=$_POST['pass'];
    
    
     $_SESSION['email']= $user;
    $_SESSION['pass']= $pass;
     $_SESSION['us']=$us;
    
      
    }
}
if($us=="Patient")
{
$sql=$con->query("SELECT * FROM `patient` WHERE `email`='$user' AND `pass`='$pass'");


if($sql->num_rows > 0)
{
while($row = $sql->fetch_assoc()){
    $id=$row['pid'];
    $name=$row['lname'];
   $dob=$row['dob'];
    $sex=$row['sex'];
    $mno=$row['mno'];
    $email=$row['email'];
    $pass=$row['pass'];
    $status=$row['status'];

}
}
}

elseif($us=="Doctor"){

$sql=$con->query("SELECT * FROM `doctor` WHERE `doccode`='$user' AND `pass`='$pass'");

if($sql->num_rows > 0)
{
while($row = $sql->fetch_assoc()){
    $did=$row['doccode'];
    $dname=$row['docname'];
   $sp=$row['specialization'];
}

}
}



    ?>
<html>
<head>
   
    <title>Patient Details</title>
   
</head>
<link href="patient.css" rel="stylesheet" text="css/text">
<body>
<form action="tabdemo.php" method="get">


<div style="height:10in;width:16in;background-color:azure;padding-top:1in; font-size: larger; " class="card-group">


            <?php
if($us=="Patient")
{
    ?>
    <div style="height:auto;width:16in;background-color:azure;text-align:left;">
<h1 style="text-align: center;">-:   Patient Details    :-</h1>


<table align="center" border="1" class="tab2" style="height:5in;width:10in;background-color: white;font-size:larger;">
    <tr>
        <td>
            <b>
                Patient Id :
            </b>
        </td>
    <td>
<label ><?php echo $id;?></label>

    </td>
</tr>

<tr>
<td>
            <b>
                Patient Name :
            </b>
        </td>
    <td>
<label><?php echo $name; ?></label>
    </td>
</tr>

<tr>
<td>
            <b>
                Date of Birth :
            </b>
        </td>
    <td>
<label><?php echo $dob; ?></label>
    </td>
</tr>

<tr>
<td>
            <b>
                Gender :
            </b>
        </td>
    <td>
<label><?php echo $sex ;?></label>
    </td>
</tr>

<tr>
<td>
            <b>
                Mobile Number :
            </b>
        </td>
    <td>
<label><?php echo $mno; ?></label>
    </td>
</tr>

<tr>
<td>
            <b>
                Email  :
            </b>
        </td>
    <td>
<label><?php echo $email; ?></label>
    </td>
</tr>

<tr>
<td>
            <b>
                Password :
            </b>
        </td>
    <td>
<label><?php echo $pass; ?></label>
    </td>
</tr>
<tr align="center"><td colspan="2">
    Status :
    <label>
<?php echo $status;?></label>
</td></tr>
</table>
</div>
<?php 
}
elseif($us=="Doctor")
{
    ?>
    <div style="height:auto;width:16in;background-color:azure;text-align:center;">
<h1>Doctor Details</h1>


<table align="center" border="1" class="tab2" style="height:5in;width:5in;border-radius:0.10in;text-align:left;background-color: white; font-size:larger;">
    <tr align="center"><th>Doctor Data</th>
    <th>
        Description
    </th>
    </tr>
    <tr>
        <td>
            
                Doctor Id :
            
        </td>
    <td>
<label ><?php echo $did; ?></label>

    </td>
</tr>

<tr>
<td>
            
                Doctor Name :
            
        </td>
    <td>
<label><?php echo $dname; ?></label>
    </td>
</tr>

<tr>
<td>
            
                Date of Birth :
            
        </td>
    <td>
<label><?php echo $sp; ?></label>
    </td>
</tr>
<tr align="center"><td colspan="2">
    <input type="submit" name="pdata" value="Check Patient" style="height: 0.50in;width:2in;font-size:larger;border-radius:0.20in;">
    <input type="hidden" name="did" value=<?php echo $did; ?> >
</td></tr>
</table>
    </div>
    <?php
}

?>
</div>

<!-- <div style="height:5in;width:7in;background-color:green;" align="left">
</div>
<div style="height:5in;width:8in;background-color:white;">


</div>
</div> -->
</form>
</body>
</html>

    







