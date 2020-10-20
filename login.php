<?php session_start(); ?>

<html lang="en" dir="ltr">
 <head>
  <title>Kala Kung Sec. Eng. B. school</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">
    <style media="screen">
      body{
         background:url("public/images/bac2.jpg");
         background-repeat:no-repeat;
         background-size:cover;
         background-position:center;
         padding:0;
         margin:0;
       }
      .center{
        width: 30%;
        height: auto;
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        background-color: #000;
        box-sizing:border-box;
      	padding:80px 30px 30px;
      	 border-radius:6%;
      }
        .icon{
          width:100px;
          height:100px;
          border-radius:100%;
          position:absolute;
          top:-50px;
          left: 160px;
      }

      .center p{
        padding:0;
        margin:0;
        font-weight:bold;
        color: #fff;
      }
      .center input{
        width:100%;
        margin-bottom:15px;
      }
      .center input[type="text"], input[type="password"]{
        border:none;
        border-bottom:1px solid white;
        background:transparent;
        outline:none;
        height:30px;
        color:white;
        font-size:14px;
      }
      .center input[type="submit"]{
        border:none;
        outline:none;
        height:40px;
        color:white;
        background:red;
        font-size:18px;
        border-radius:12px;
      }
      .center input[type="submit"]:hover{
        cursor:pointer;
        background:orange;
        color:black;
      }
      .center a{
        text-decoration:none;
        font-size:18px;
        color:white;
        line-height:20px;
      }
      .center a:hover{
          color:orange;

      }
    </style>
 </head>
  <body>
    <div class="container">
      <div class="center">
        <div class="">
          <img src="public/images/key.jpg" alt="icon" class="icon">
          <img src="public/images/logo-button.png" alt="logo" class="img-fluid mb-4">
        </div>
        <div class="form-group">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <p>Username:</p>
            <input type="text" name="admin_name" placeholder="Enter user name" required >
            <p>Password:</p>
            <input type="password" name="password" placeholder="Enter password" required autocomplete="off"/>
            <p id="pass" class="mb-2"></p>
            <input type="submit" name="login"  value="Login" /></a>
            <a href="forgot.php">Forgot password ?</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
  include 'connection.php';
   if(isset($_POST['login'])){
      $username = $_POST['admin_name'];
      $pass = $_POST['password'];
         $userSearch = "select * from login_user_admin where user_name = '$username'";
         $query = mysqli_query($conn, $userSearch);
         $user_find = mysqli_num_rows($query);

         if($user_find){
           $db_pass = mysqli_fetch_assoc($query);
           $user_pass = $db_pass['password'];

           $_SESSION['admin_name'] = $db_pass['user_name'];  //session find

           $pass_decode = password_verify($pass, $user_pass);

           if($pass_decode){
             ?>
             <script type="text/javascript">
               location.replace("mainuploads.php");
             </script>
             <?php
           }else{
             ?>
             <script type="text/javascript">
                document.getElementById('pass').innerHTML = "Enter a valid password !"
             </script>
             <?php
           }
         }else{
           ?>
           <script type="text/javascript">
              document.getElementById('pass').innerHTML = "Username and Password is incorrect !"
           </script>
           <?php
         }
   }

 ?>
