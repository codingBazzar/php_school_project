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
         <div class="form-group row mt-4">
           <label class="col-sm-4 col-form-label ">Enter password:</label>
           <div class="col-sm-8">
             <input type="text" class="form-control " name="npass" placeholder="New Password">
           </div>
         </div>
         <div class="form-group row ">
            <label class="col-sm-4 col-form-label ">confirm password:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control mb-3" name="cpass" placeholder="Confirm Password">
              <p id="para"></p>
              <input type="submit" name="submit" value="Update Password" class="btn btn-success mr-2">
            </div>
          </div>
      </form>
    </div>
  </body>
</html>

<?php
  include 'connection.php';

    if(isset($_POST['submit'])){

        if(isset($_GET['id'])){
          $id = $_GET['id'];

      $newpass = mysqli_real_escape_string($conn,$_POST['npass']);
      $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);

      $npassword = password_hash($newpass, PASSWORD_BCRYPT);
      $cpassword = password_hash($cpass, PASSWORD_BCRYPT);

      if($newpass === $cpass){
         $update = "update login_user_admin set password = '$npassword' where id = '$id' ";
         $query = mysqli_query($conn, $update);

         if($query){
           header('location:login.php');
         }
      }else{
         ?>
            <script type="text/javascript">
              document.getElementById('para').innerHTML = "Password not Matched!";
            </script>
         <?php
      }
    }
}
 ?>
