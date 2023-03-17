<?php

include("con.php");
if(isset($_POST["submit"]))
{
$dcode=$_POST['dcode'];
$dname=$_POST['name'];
$fee=$_POST['fee'];
$sp=$_POST['sp'];

$sql=mysqli_query($con,"INSERT INTO `doctor`( `doccode`, `docname`, `fee`, `specialization`) VALUES ('$dcode','$dname','$fee','$sp')");
if($sql)
{
    echo "Inserted Data";
}
else
{
echo "Error";
}

}
if(isset($_POST["delete"]))
{
    $code=$_POST['dcode'];

$delete=mysqli_query($con,"DELETE FROM `doctor` WHERE `doccode`= '$code'");
if($delete){
    echo "Successfull";
}
else{
    echo "Not Inserted";
}
}















?>