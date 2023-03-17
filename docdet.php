
        <?php
include("con.php");
include("navbar.php");
$sp="";
if(isset($_POST['button1']))
{
 $sp="Neurology";
}
elseif(isset($_POST['button2']))
{
    $sp= "Pathology";
}
elseif(isset($_POST['button3']))
{
    $sp= "Urology";
}
elseif(isset($_POST['button4']))
{
    $sp= "Pediatrics";
}
elseif(isset($_POST['submit']))
{
    $sp="nurology";
}


$sql=$con->query("SELECT * FROM `doctor` WHERE `specialization`='$sp'");

if($sql->num_rows > 0)
{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
   
</head>
<link href="bootstrap.min.css" rel="stylesheet" text="text/css">
<link rel="stylesheet" text="css/text" href="docdet.css">
<body>
<form action="patientdet.php" method="GET">
    <div class="size">
        <div align="center" class="h1">
            <h1>Doctors Details</h1>

</br>
        </div>
        <div class="cnt" align="center">

      
    <table  class="table" align="center" border="0">
        <tr align="left">
        <th > <h3>Doctor Id </h3></th>
        <th> <h3>Doctor Name </h3></th>
        <th> <h3>Doctor Fees </h3></th>
        <th>  <h3>Doctor Specialization </h3></th>




        </tr>
        <?php
while($row = $sql->fetch_assoc()){
 $id=$row['doccode'];
  
 $name=$row['docname'];
  
 $fee=$row['fee'];
  
  $specialization=$row['specialization'];
  
  ?>
  
    
        <tr >
            
            <td>
                <lable id="lbl"><?php echo $id ;?></label>
            </td>
            <td>
                <?php echo $name ;?>
            </td>
            <td>
                <?php echo $fee ;?>
            </td>
            <td>
                <?php echo $specialization ;?>
            </td>

            <td align="center">
          <a href='patientdet.php?id=<?php echo $id; ?>' style=" font-size:xx-large;">Book</a>
                
            </td>
   
        </tr>


 <?php  
}
?>
</table>
<?php
}
?>
       
       
        </div>

    </div>
    </form>
</body>
</html>