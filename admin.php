<?php
include("con.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin</title>
</head>
<link href="patient.css" rel="stylesheet" text="text/css">
<body>
    <form action="admininsert.php" method="post">
<table border="0" align="center" class="tab" >
    <tr>
        <td >



<table border="0" class="tab2" align="center">
    <tr align="center">
        <td>
            <h2>Admin Doctor Insert Form</h2><br/>
            <h4>Please fill in the form below</h4>

        </td>
    </tr>
    <tr><td>
    <B>Doctor Code</B><br/><br/>
            <input type="text" name="dcode" class="tbox">
           
</td></tr>
<tr><td>
    <B>Doctor Name</B><br/><br/>
            <input type="text" name="name" class="tbox">
           
</td></tr>
<tr><td>
    <B>Doctor Fees</B><br/><br/>
            <input type="text" name="fee" class="tbox">
           
</td></tr>
<tr><td>
    <B>Doctor Specialization</B><br/><br/>
            <input type="text" name="sp" class="tbox">
           
</td></tr>
<tr align="center">
        <td>
            <br/>
            <button class="bt" type="submit" name="submit">Submit</button>
        </td>
    </tr>

    <tr align="center">
        <td>
            <br/>
            <button class="bt" type="submit" name="delete">Delete</button>
        </td>
    </tr>
</table>
        </td>
    </tr>
</table>
</form> 
</body>
</html>