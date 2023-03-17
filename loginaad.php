<?php
include("con.php");
include("navbar.php");


?>
<?php

// session_start();
// $check=$_SESSION['email'];

//  if($check!==null){
//    header('location: patientdetails.php');
   
//      }
//      else{
// $error="";
// if(isset($_POST['submit']))
// {
//     $user=$_POST['email'];
//     $pass=$_POST['pass'];
//     $us=$_POST['op'];
// }
session_start();
if(empty($_SESSION['email'])){
?>

    <!DOCTYPE html>
    <html lang="en">
    <head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <link rel="stylesheet" href="loginaad.css">
    </head>
    <body>
    <form action="patientdetails.php" method="POST">
        <section>
            <div class="imgbx">
                <img src="docback.jpg">
    
            </div>
            <div class="contentbx">
                <div class="formbx">
                    <h2>Login</h2>
                    <div class="inputbx">
                    <span>Doctor/Patient</span>
                    <br/>
                    <select name="op">
                   
                        <option>Doctor</option>
                        <option>Patient</option>
                    </select>
                    </div>
                        <div class="inputbx">
                            <span>Username</span>
                            <input type="text" name="email" required>
                            
    
    
                        </div>
    
                        <div class="inputbx">
                            <span>Password</span>
                            <input type="password" name="pass" required>
                          
                            
    
                        </div>
                        <div class="remember">
                            <label> <input type="checkbox" name="">Remember me</label><br/>
                            
    
    
                        </div>
                        <div class="inputbx">
                        
                            <input type="submit" value="Login" name="submit">
                            
                            
    
                        </div>
                        <div class="inputbx">
                            <p>Don't have an account? <a href="#">Sign up</a></p>
                            
                    
                            
    
                        </div>
    
    
                    </form>
                    <h3>Login with social media</h3>
                    <ul class="sci">
                        <li><img src="f.png"></li>
                        <li><img src="i.png"></li>
                        <li><img src="t.png"></li>
    
    
    
                    </ul>
    
                </div>
           
    
    
            </div>
    
    </section>
    
    
        
        
    </body>
    </html>
    <?php
}
else{


$check=$_SESSION['email'];

 if($check==null){
    $error="";
    if(isset($_POST['submit']))
    {
        $user=$_POST['email'];
        $pass=$_POST['pass'];
        $us=$_POST['op'];
    }
    

   
    

?>

<?php
 }
 else{
    header('location: patientdetails.php');
}
}
?>