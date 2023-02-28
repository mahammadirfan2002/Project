<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Student Registration</title>
    <style>
        img{
                width: 100%;
                height: 100%;
            }
            table{
                position:absolute;
                top: 5%;
                left: 31%;
                
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
                    left: 20%;
                    
                }
                body{
                    
                    overflow-x: hidden;
                    
                }
            }
    </style>
  </head>
  <body>
   <!--img src="2396722-1536x864-[DesktopNexus.com].jpg"-->
    <!--center-->
        <form action="#" class="content" method="POST" name="myform1" onsubmit="validate()">
            <table>
                <tr>
                <td colspan="2"><h1>Student Register Form</h1></td>
                </tr>
                <tr>
                   <td>Name:</td>
                   <td><input name="name" type="text" ></td>
               </tr>
               <tr>
                   <td><br>Email:</td>
                   <td><br><input name="email" type="email"></td>
               </tr>
               <tr>
                   <td><br>Phone No:</td>
                   <td><br><input type="tel" name="phone_no" pattern="[0-9]{10}"></td>
               </tr>
               <tr>
                   <td><br>Username:</td>
                   <td><br><input name="username" type="text"></td>
               </tr>
               <tr>
                   <td><br>Password:</td>
                   <td><br><input name="password" type="password"></td>
               </tr>
               <tr>
                   <td><br><input id="a" type="Submit" name="login" value="Register"></td>
                   <td><br><input id="a" type="Reset" value="Cancel"></td>
               </tr>
               <tr>
                   <br><td colspan="2">Already have an Account?</td>
               </tr>
               <tr>
                   <br><td colspan="2"><a href="Student_Login.php">Login</a></td>
               </tr>
            </table>
        </form>
    <!--/center-->



    <script>
            function validate(){
                var a=document.myform1.name1.value;
                var b=document.myform1.email.value;
                var c=document.myform1.phone_no.value;
                var d=document.myform1.username.value;
                var e=document.myform1.password.value;
                if(a==""||a==null){
                    alert("Name should not be empty");
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
include("Connect.php");
if($_POST['login'])
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO student_registration values('$name','$email','$phone_no','$username','$password')";
    $data = mysqli_query($conn, $query);
    if($data){
        //echo "Data is inserted";
        $alert = "<script>alert('You have been Registered')</script>";
        echo $alert;
    }
    else{
        echo "Data is not inserted";
    }
}
?>