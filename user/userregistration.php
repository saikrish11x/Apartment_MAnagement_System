<?php include '../navbar.php';?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<!--link rel="stylesheet" href ="mystyles.css"-->
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<style media="screen">
body{
    background:url(../img/image2.jpg);
    background-size:cover;
  font-family:Arial;
  font-family: 'Poppins', sans-serif;
}
.wrap{
  max-width:350px;
  border-radius:20px;
    margin:auto;
    background:rgba(0,0,0,0.8);
    box-sizing:border-box;
    padding:40px;
    color:#fff;
    margin-top:100px;
}
h2{
     text-align:center;
}
input[type=text],input[type=password],input[type=email]{
        width:100%;
        box-sizing:border-box;
      padding:12px 5px;
    background:rgba(222,207,206,0.10);
      outline:none;
      border:none;
      text-align: center;
      border-bottom:1px  #fff;
      color:#fff;
      border-radius:15px;
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
background:#003366;
border-radius:20px;
font-size:20px;
color:#fff;
cursor: pointer;
}
a, a:active, a:focus {
   outline: none;
}
</style>
<body>

<div class ="wrap">
    <h2> Sign up Here</h2>
    <br>
    <form>
        <input type ="text" placeholder ="First Name"required>
        <input type ="text" placeholder ="Last Name"required>
        <input type ="email" placeholder ="Email"required>
        <input type ="text" placeholder ="Username"required>
        <input type ="text" placeholder ="Password"required>
        <input type ="submit" value="submit">
     </form>
</div>
</body>
</html>
