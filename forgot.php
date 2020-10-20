<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kala Kung Sec. Eng. B. school</title>
    <style media="screen">
        .for{
          font-size: 1.1rem;
          font-weight: bold;
          width: 30%;
          height: auto;
          margin-top: 100px;
        }
    </style>
  </head>
  <body>
    <div class="container for">
      <img src="public/images/logo.png" alt="logo_img" class="img-fluid">
      <form method="post">
        <p id="para" class="bg-success "></p>
         <div class="form-group row mt-4">
           <label class="col-sm-4 col-form-label ">Email:</label>
           <div class="col-sm-8">
             <input type="text" name="email" class="form-control mb-3" placeholder="email" >
             <input type="submit" name="submit" value="Send Mail" class="btn btn-success mr-2">
             <a href="login.php" class="btn btn-success">login</a>
           </div>
         </div>
      </form>
    </div>
  </body>
</html>

<?php
  include 'connection.php';
  require 'PHPMailer\PHPMailerAutoload.php';

     if(isset($_POST['submit'])){

       $email = mysqli_real_escape_string($conn,$_POST['email']);

       $userQuery = "select * from login_user_admin where email = '$email' ";
       $query = mysqli_query($conn, $userQuery);
       $usercount = mysqli_num_rows($query);

       if($usercount){

         $userdata = mysqli_fetch_assoc($query);
         $id = $userdata['id'];

         $mail = new PHPMailer;

         $mail->isSMTP();
         $mail->Host = "smtp.gmail.com";
         $mail->SMTPAuth = true;
         $mail->Username = "kalakunjsebschool@gmail.com";
         $mail->Password = "Kala2055";
         $mail->SMTPSecure = 'tls';
         $mail->Port = 587;

         $mail->setFrom("kalakunjebschool@gmail.com");
         $mail->addAddress($email);

         $mail->isHTML(true);
         $mail->Subject = "Password Reset";
         $mail->Body = "<h3>Hi! Kala Kunj Sec. School Admin. Click Hare to reset you password
                              http://localhost:90/webdevlopment/kalakunj/forgotconfirm.php?id=$id </h3>";

           if($mail->send()){
             ?>
             <script type="text/javascript">
               document.getElementById('para').innerHTML = "Check your Email to Reset password:";
             </script>
             <?php
           }else{
             ?>
              <script type="text/javascript">
                alert("mail not send");
              </script>
             <?php
           }

         // header('location:forgotconfirm.php');
       }else{
         ?>
           <script type="text/javascript">
              document.getElementById('para').innerHTML = "Invalid Email:";
           </script>
         <?php
       }
     }
 ?>
