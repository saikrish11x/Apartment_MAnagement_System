<?php include '../navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!--link rel="stylesheet" href="../css/userlogin.css" type="text/css"-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>AMS | User Login </title>
    <style media="screen">

    body{
         margin: 0 auto;
         background-image: url("../img/background.jpeg");
         height: 100%;
         background-size:contain;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center center;;
         background-attachment: fixed;
         font-family: 'Poppins', sans-serif;
     }


     .container
     {
          attachment:fixed;
         width: 370px;
         height: 450px;
         text-align: center;
         margin: 0 auto;
         background-color: rgba(127, 140, 141,0.9) ;
         margin-top: 160px;
         border-style: solid;
         border-radius: 20px;
     }
    .container img{
      overflow: auto;
         border-radius:100px;
         width: 140px;
         height: 140px;
         margin-top: -60px;
         margin-bottom: 5px;
     }

    input{
        margin-top: 30px;
        height:45px;
        width: 300px;
        border-radius: 25px;
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        background-color:
        }

    input[type="submit"]:hover{
        background-color: #2ecc71;
        cursor: pointer;
    }
    a{
      text-decoration: none;
      color: #ffffff;
    }
    a, a:active, a:focus {
       outline: none;
    }
    a:hover{
      color : red;
    }
    pull-right
    {
      color: #2ecc71;
    }


    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

  </head>

  <body>
         <div class="container">
             <img src="../img/logo.jpeg" alt="AMS logo" >

         <form class="login" name="login" method="post" autocomplete="off">
                 <label id="invalid" style="color:red;text-align: center;visibility: hidden;">INVALID ID or PASSWORD</label>
             <div class="input">
                 <input type="text" id="userid" name="userid" placeholder="Enter Username"/ required>
             </div>
             <div class="input">
                 <input type="password" id="password" name="password" placeholder="Enter password" required>
             </div>
             <br>
             <div class="forget">
               <span class="pull-right">
                          <a data-toggle="modal" href="http://localhost/Apartment_Management_System/user/forgetpassword.php"> <b>Forgot Password?</b></a>

                      </span>
             </div>
             <input type="submit" name="submit" value="Login" class="login">
             <div class="registration">

                      Don't have an account yet?<br/>
                      <a class="" href="http://localhost/Apartment_Management_System/user/userregistration.php">
                        <b>  Create an account </b>
                      </a>
                  </div>
         </form>
         </div>

  </body>

</html>
