<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Student Login</title>
    <style>
            table{
                position:absolute;
                top: 20%;
                left: 35%;
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
                background-position: 40% 10%;
                background-size: 1800px 890px;
            }
            @media only screen and (max-width:770px)
            {
                .content{
                   flex-direction: column;
                   position:absolute;
                top: 1%;
                left: 20%;
                }
                body{
                    overflow-x: hidden;
                }
            }
            .image{
                width:10%;
                opacity:0.5;





            }
        </style>
  </head>
  <!--body style="background-image:url('Background.jpg');"-->
  <body>
    <!--img class="image" src="WhatsApp Image 2023-01-26 at 17.45.42.jpeg"-->
    <!--center-->
    <!--img alt="icon" id="l" src="imag4.jpg"></img-->
      <form name="myform" class="content" method="POST" onsubmit="validate()">
        <table>
        <tr>
            <td colspan="2"><h1>Student Login Form</h1></td>
        </tr>
        <tr>
            <td>
                Username:
            </td>
            <td><input name="name" type="text" ></td>
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
            <br><td colspan="2"><a href="Student_Registration.php">Create Account</a></td>
        </tr>
        </table>
      </form>
    <!--/center-->


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
        alert($result);
    </script>
  </body>
</html> 

<?php
error_reporting(0);
include("Connect.php");

if($_POST['value'])
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query="SELECT * from student_registration where username='$name' && password='$password'";
    $data=mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
   
    if ($total == 1) {
        $alert = "<script>alert('Sucessfully login')</script>";
        echo $alert;
        
        ?>
    <meta http-equiv = "refresh" content = "0; url = Student_Home.php"/>
    <?php
    }
    else{
        $alert = "<script>alert('Incorrect Username or Passsword')</script>";
        echo $alert;
        #echo "Login failed due to incorrect data";
    }
    
}



?>