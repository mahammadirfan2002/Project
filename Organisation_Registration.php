<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Organisation Registration</title>
    <style>
            img{
                width: 100%;
                height: 100%;
            }
            table{
                position:absolute;
                top:7%;
                left: 30%;
                
            }
            td{
                text-align: center;
                font-size: 30px;
            }
            a{
                text-decoration: none;
                color: blue;
            }
            #a{
                border-radius: 12px;
                font-size: 25px;
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
                bottom: 640px;
                left: 30px;
                font-size: 30px;
                color: navy;
            }
            .i{
                position: absolute;
                bottom: 615px;
                left: 70px;
                font-size: 30px;
            }
            #a1{
                position: relative;
                left: 50px;
            }
            body{
                background-image: url('Background.jpg');
                background-repeat: no-repeat;
                background-position: 10% 5%;
                background-size: 1800px 890px;
            }
            @media only screen and (max-width:770px)
            {
                .content{
                   flex-direction: column;
                   position:absolute;
                   /*top: 3%;*/
                    left: 15%;
                    
                }
                body{
                    
                    overflow-x: hidden;
                    
                }
            }
        </style>
  </head>
  <body>
   
    <center>
        <form name="myform1" class="content" action="#" method="POST" onsubmit="validate()">
            <table>
                <tr>
                <td colspan="2"><h1 id="a1">Organisation Register Form</h1></td>
                </tr>
                <tr>
                   <td>
                       Name of the Organisation:
                   </td>
                   <td><input name="name" type="text" ></td>
               </tr>
               <tr>
                   <td><br>Email:</td>
                   <td><br><input name="email" type="email"></td>
               </tr>
               <tr>
                   <td><br>Phone No:</td>
                   <td><br><input type="number" name="phone_no"></td>
               </tr>
               <tr>
                   <td><br>
                       Username:
                   </td>
                   <td><br><input name="username" type="text"></td>
               </tr>
               <tr>
                   <td><br>Password:</td>
                   <td><br><input name="password" type="password"></td>
               </tr>
               <tr>
                   <td>
                       <br><input id="a" type="Submit" name="value" value="Register">
                   </td>
                   <td><br><input id="a" type="Reset" value="Cancel"></td>
               </tr>
               <tr>
                   <br><td colspan="2">Already have an Account?</td>
               </tr>
               <tr>
                   <br><td colspan="2"><a href="Organisation_Login.php">Login</a></td>
               </tr>
            </table>
        </form>
    </center>

    <script>
            function validate(){
                var a=document.myform1.name1.value;
                var b=document.myform1.email.value;
                var c=document.myform1.phone_no.value;
                var d=document.myform1.username.value;
                var e=document.myform1.password.value;
                if(a==""){
                    alert("Enter Name of the Organisation");
                }
                else if(b==""||b==null){
                    alert("Email should not be empty ");
                
                }
                else if(c==""|c==null){
                    alert("Number should not be empty ");
                }
                else if(d==""||d==null){
                    alert("Username should not be empty");
                }
                else if(e==""||e==null){
                    alert("Password should not be empty");
                }
                else if(e.length<5){
                    alert("Password must be greater than 5 digits");


                }
            }
           </script>
  </body>
</html>


<?php
error_reporting(0);
include("connect.php");
if($_POST['value']){
    $name_of_organisation= $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$query = "INSERT INTO organisation_registration values('$name_of_organisation','$email','$phone_no','$username',' $password')";
$data = mysqli_query($conn, $query);
if($data){
    $value="<script>alert('Registration is success')</script>";
    echo $value;
}
else{
    $value = "<script>alert('Registration is failed')</script>";
    echo $value;
}
?>