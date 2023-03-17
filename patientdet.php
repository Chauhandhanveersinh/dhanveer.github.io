<?php
include("con.php");
include("navbar.php");
?>

<?php

$cid=$_GET['id'];


$sql=$con->query("SELECT * FROM `doctor` WHERE `doccode`='$cid'");

if($sql->num_rows > 0)
{
while($row = $sql->fetch_assoc()){
    $id=$row['doccode'];
    $name=$row['docname'];
   $fee=$row['fee'];
    $Specialization=$row['specialization'];

}

}
if(isset($_POST['submit'])){
    $dt=$_POST['date'];
    $nm=$_POST['lname'];
    $mno=$_POST['mno'];
    $mnolenth=strlen($mno);
    $newdate=date("m-d-Y",strtotime($dt));
    $sysdate=date("m-d-Y");
    if(($sysdate > $newdate))
    {
        $dter= "Please Enter Right Date";
        
    }else{
        $dter="";
    }
    if(($mnolenth>10) or ($mnolenth<10))
    {
        $mner= "Please Enter Right Mobile Number";
    }
    else{
        $mner="";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
   
</head>
<link href="bootstrap.min.css" rel="stylesheet" text="text/css">
<link rel="stylesheet" text="css/text" href="patientdet.css">
<body>

<form action="#" method="POST">
    <div class="card-group">
<div >
        <div align="center" class="h1">
        <h2 >New Patient Registration</h2><br/>
            <h4>Please fill in the form below</h4>
        </div>
        <div class="cnt" align="center">
        <table   align="center" class="table">
   
    <tr align="left">
       
       <td><b>Doctor ID :</b>
       <input type="hidden" name="hidden" value=<?php echo $cid; ?>>
        <label >
           <?php echo $cid; ?>
           </label>
          

       </td>
   </tr>
   <br/>
   <tr align="left">
      
       <td><b>Doctor Name :</b>
           <?php echo $name; ?>
       </td>
   </tr>
   <br/>
   <tr align="left">
   
       <td><b>Doctor Fee :</b>
          <?php echo$fee; ?>
       </td>
   </tr>
   <br/>
   <tr align="left">
   <td>
       <b>Doctor Specialization :</b>
           <?php echo $Specialization; ?>
       </td>
   </tr>
    <tr align="left" >
        <td>
            <B>Registration Date and Time</B><br/><br/>
            <input  type="date" name="date"  id="rdate" required>
             <select name="time" >
                <option>10:00 to 11:00</option>
                <option>11:00 to 12:00</option>
                <option>01:00 to 02:00</option>
                <option>02:00 to 03:00</option>
                <option>03:00 to 04:00</option>
                <option>04:00 to 05:00</option>

             </select>
      
            <select  name="tm">
                <option>AM</option>
                <option>PM</option>
            </select>
        </td>
    </tr>
    <tr><td><lable style="color:red;">
    
    <?php 
    if(isset($dter)){
        echo $dter;}
        else{
        }
        ?></lable></td></tr>

    <br/>
    <tr align="left">
        <td>
            <b>Patient Name</b><br/><br/>
            <input  class="tbox" type="text" name="fname" placeholder="First Name" required><br/><br/>
            <input class="tbox" type="text" name="lname" placeholder="Last Name" required>
        </td>
    </tr>
    <tr align="left">
        <td>
            <b>Date of Birth</b><br/><br/>
            <input type="date" name="dob" > 
        </td>
    </tr>
    <tr align="left">
        <td>
        <b>Sex</b><br/><br/>
        <select  name="sex" required>
            <option>Male</option>
            <option>Fenale</option>
            <option>Other</option>
        </select>
        </td>
    </tr>
    <tr align="left">
        <td>
            <b>Phone Number</b><br/><br/>
            <input class="tbox" type="text" name="mno" placeholder="(00000-00000)" id="mno" require></td></tr>
        
        <tr><td><label style="color:red;"><?php
            if(isset($mner)){
            echo $mner;
            }
            else{
            }
            
            ?></label>
        </td>
    </tr>
    
   
    <tr align="left" >
        <td>
            <b>Email</b><br/><br/>
            <input class="tbox" type="email" name="email" placeholder="Enter Your Email" required>
           
        </td>
    </tr>
    <tr align="left">
        <td>
            <b>Password</b><br/><br/>
            <input class="tbox" class="tbox" type="password"  name="pass" placeholder="Enter Password" required>
           
        </td>
    </tr>

    <tr align="left">
        <td colspan="2">
            <b>Address 1</b><br/><br/>
           <textarea name="address" rows="5" clos="500" style="border-radius: 0.20in; width:5in;"> </textarea>
      
           
        </td>
      
    </tr>

    <tr align="center">
        <td>
            <br/>
            <input type="submit" name="submit" class="button" value="Book">
            
            
        </td>
    </tr>
</table>




    </div>
</div>
    </div>
        </form>
</body>
</html>
