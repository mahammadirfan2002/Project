<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Organisation Login</title>
    <style>
            table{
                position:absolute;
                top:200px;
                left: 500px;
                text-align: center;
                
                
            }
            p{
                font-size: 30px;
            }
            #i{
                font-size: 30px;
                text-decoration: none;
            }
            #a{
               
                margin: 80px;
            }
            img{
                width: 100%;
                height: 100%;
            }
            button{
                border-radius: 12px;
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
            a{
                text-decoration: none;
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
                top: 4%;
                left: 20%;
                }
                body{
                    overflow-x: hidden;
                }
            }     
            /*#l{
                
                position: absolute;
                top: 10px;
                left: 7px;
                width: 99%;
                height: 98%;
                border-radius: 25px;
            }*/
            </style>
  </head>
  <body>
  <!--img alt="icon" id="l" src="imag4.jpg"></img-->
        <table >
            <tr>
                <td>
                    <p>Login as a Student</p>
                </td>
                <td>
                    <p>Login as a Organisation</p>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="a"><a id="i" href="Student_Login.php">Student</a></button>
                </td>
                <td>
                    <button><a id="i" href="Organisation_Login.php">Organisation</a></button>
                </td>
            </tr>
        </table>
</html>