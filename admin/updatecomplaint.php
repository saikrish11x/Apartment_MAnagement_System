<?php
session_start();
if(strlen($_SESSION['login'])==0)
  {
header('location:http://localhost/Apartment_Management_System/');
}
require '../libphp-phpmailer/class.phpmailer.php';
require '../libphp-phpmailer/class.smtp.php';
function emailtender($sub,$matter,$id)
{


  $mail = new PHPMailer;
  $mail->setFrom('admin@example.com');
  $mail->addAddress($id);
  $mail->Subject = "$sub";
  $mail->Body = "<h2>Hello!</h2><p>
  ".$matter."</p>";

  $mail->isHTML(true);
  $mail->AltBody = "This message is generated by plain text !";
  $mail->IsSMTP();
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'ssl://smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Port = 465;

  //Set your existing gmail address as user name
  $mail->Username = 'ams605044@gmail.com';

  //Set the password of your gmail address here
  $mail->Password = 'Admin11123';
  if(!$mail->send()) {
    echo !extension_loaded('openssl')?"Not Available":"Available";
    echo 'Email is not sent.';
    echo 'Email error: ' . $mail->ErrorInfo;
  }
}
$id=$_GET['cid'];
include("includes/config.php");

$ret=mysqli_query($con,"SELECT * FROM complaint WHERE complaintid='$id'");
$row = mysqli_fetch_array($ret);
$feild=$row['ComplaintType'];
if(isset($_POST['submit']))
{
  $jobcount=1;
  $uid=$row['Userid'];
  $rit=mysqli_query($con,"SELECT * FROM user WHERE Userid='$uid'");
  $rew = mysqli_fetch_array($rit);
  $uemail=$rew['userEmail'];
$tid=$_POST['tech'];
  $van=mysqli_query($con,"update complaint set Techid='$tid',status='Pending' where complaintid='$id'");
  $han=mysqli_query($con,"update technician set Noofjobs=Noofjobs+'".$jobcount."' where Techid='$tid'");
  $rdt=mysqli_query($con,"SELECT * FROM technician WHERE Techid='$tid'");
  $rdw = mysqli_fetch_array($rdt);
  $nme=$rdw['firstName'];
  $pne=$rdw['contactNo'];
  $sub="Complaint Id $id Technician Assigned";
  $mel=$rdw['userEmail'];
  $une=$rew['firstName'];
  $matter="Dear $une ,<br/><br/> Your Complaint is being Processed.<br/><br/> Technician $nme is assigned.Your complaint will be resolved As Soon as possible<br/><br/>Technician Contact : <br/>    Phone No: $pne<br/> Email : $mel ";
  emailtender($sub,$matter,$uemail);
  $subj="Complaint Id $id New Complaint";
  $nc=$row['noc'];
  $dec=$row['ComplaintDesc'];
  $eme=$rew['userEmail'];
  $bl=$rew['block'];
  $fl=$rew['flatNumber'];
  $cn=$rew['contactNo'];
  $mat="Dear $nme,<br/><br/> New Complaint to be solved. <br/><br/> Problem : $nc  <br/><br/> Description : $dec <br/><br/>  <address>
Complaint by: $une.<br>
Block: $bl<br>
Flat No: $fl<br>
Contact No: $cn<br>
Email Id :$eme
</address>";
emailtender($subj,$mat,$mel);
  echo "<script>alert('Assigned succesfully');</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      body{
        font-size: 22px;
      }
      select{
        width: 200px;
        font-size: 24px;
      }
      .no{
        background: #bac;
      }
       </style>
    <title>Update Complaint</title>
  </head>
  <body>
    Complaint No:                  <?php echo $id; ?>
    <br>
    <br>
    <br>
    <form  method="post">


    Assign Technician :<br>
    <div class="bom">


    <?php
      $rat=mysqli_query($con,"SELECT * FROM technician WHERE feild ='$feild'");
      echo "<select  name='tech' required>";
          echo "<option value=''>Choose</option>";
      while($riw = mysqli_fetch_array($rat))
      {
          echo "<option value='". $riw['Techid']."'> <i> ". $riw['firstName']."</i>   <p class='no' >Tasks- "  . $riw['Noofjobs'] . "</p></option>";

      }
      echo "<select>";
      echo "<br/>";
     ?>
     <br>
     <br>

</div>
     <div class="sub">
    <input type="submit" name="submit" value="submit">

     </div>
</form>
        </body>
</html>
