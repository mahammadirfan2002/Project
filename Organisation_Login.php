<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Organisation Login</title>
    <style>
            table{
                position:absolute;
                /*top:180px;
                left: 530px;*/
                top: 20%;
                left: 30%;
            }
            td{
                text-align: center;
                font-size: 190%;
            }
            #a{
                border-radius: 12px;
                font-size: 25px;
            }
            img{
                width: 100%;
                height: 100%;
            }
            a{
                text-decoration: none;
                color: blue;
            }
            .c{
                height: 7%;
                width: 8%;
                position: absolute;
                top: 10px;
                left: 800px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
                
            }
            .d{
                position: absolute;
                top: 20px;
                left: 930px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
            }
            .e{
                position: absolute;
                top: 20px;
                left: 1030px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
            
            }
            .f{
                position: absolute;
                top: 20px;
                left: 1120px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
            }
            .g{
                position:absolute;
                top: 20px;
                left:25px;
                background: transparent;
                opacity:1;
                font-size: 30px;
                font-size: 25px;
                border:none;

            }
            h3{
                position: absolute;
                bottom: 710px;
                left: 30px;
                font-size: 30px;
                color: navy;
            }
            .i{
                position: absolute;
                bottom: 675px;
                left: 70px;
                font-size: 30px;
            }
            body{
                background-image: url('Background.jpg');
                background-repeat: no-repeat;
                background-position: 40% 10%;
                background-size: 1800px 890px;
            }
            @media only screen and (max-width:770px)
            {
                .content{
                   flex-direction: column;
                   position:absolute;
                top: 4%;
                left: 20%;
                }
                body{
                    overflow-x: hidden;
                }
            }
        </style>
  </head>
  <body>
        
        
            <form name="myform" class="content" method="GET" action="#" onsubmit="validate()">
             <table>
               <tr>
                   <td colspan="2"><h1>Organisation Login Form</h1></td>
               </tr>
               <tr>
                   <td>
                       Username:
                   </td>
                   <td><input name="username" type="text" ></td>
               </tr>
               <tr>
                   <td><br>Password:</td>
                   <td><br><input name="password" type="password"></td>
               </tr>
               <tr>
                   <td>
                       <br><input id="a" type="Submit" name="value" value="Login">
                   </td>
                   <td><br><input id="a" type="Reset"></td>
               </tr>
               <tr>
                   <br><td colspan="2">Don't have an Account?</td>
               </tr>
               <tr>
                   <br><td colspan="2"><a href="Organisation_Registration.php">Create Account</a></td>
               </tr>
             </table>
            </form>
            <h3>Academic</h3>
          <p class="i">Portal</p>
            <script>
               function validate(){
                   var a=document.myform.name.value;
                   var b=document.myform.password.value;
                   if(a==""||a==null){
                       alert("Enter Username");
                   }
                   else if(b==""){
                       alert("Enter Password");
                   }
               }
           </script>
  </body>
</html>


<?php
error_reporting(0);
include('Connect.php');
if($_GET['value']){
    $username = $_GET['username'];
    $password = $_GET['password'];
    $query = "SELECT * FROM organisation_registration WHERE username='$username' && password='$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    echo $total;
    if ($total == 1) {
        $alert = "<script>alert('Sucessfully login')</script>";
        echo $alert;
        
        ?>
    <meta http-equiv = "refresh" content = "0; url = Organisation_home.php"/>
    <?php
    }
    else{
        $alert = "<script>alert('Incorrect Username or Passsword')</script>";
        echo $alert;
        
    }
}
?>