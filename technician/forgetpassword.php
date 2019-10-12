<?php include '../navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget Password</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  body{
  background:url(../img/image2.jpg);
  background-size:cover;
font-family: 'Poppins', sans-serif;
}
a, a:active, a:focus {
   outline: none;
}
.wrap{
max-width:350px;
border-radius:20px;
  margin:auto;
  background:rgba(0,0,0,0.8);
  box-sizing:border-box;
  padding:40px;
  align-items: center;
  color:#fff;
  margin-top:100px;
}
h2{
   text-align:center;
}
input[type=email],input[type=password]{
      width:100%;
      box-sizing:border-box;
    padding:12px 5px;
    background:rgba(222,207,206,0.10);
    outline:none;
    border:none;
    border-bottom:1px  #fff;
    color:#fff;
    border-radius:5px;
    margin:5px;
     font-weight:bold;
}
input[type=submit]{
   width:100%;
   box-sizing: border-box;
padding:10px 0;
margin-top:30px;
outline:none;
border:none;
background:#60adde;
opacity:0.7;
border-radius:20px;
font-size:20px;
color:#fff;
}
input[type=submit]:hover{
background:#003366;
opacity:0.7;
}
  </style>
  <body>
    <div class ="wrap">
    <h2> Enter Registered Email</h2>
    <br>
    <form>

        <input type ="email" placeholder ="Email"required>
        <input type ="submit" value="submit">
     </form>
</div>
  </body>
</html>
