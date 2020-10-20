<?php
 include 'connection.php';

 //****** image uplods code Start from hare************

 if(isset($_POST['uplod'])){

   for($i=0; $i < count($_FILES['images']['name']); $i++){

          $filename = $_FILES['images']['name'][$i];
          $filepath = $_FILES['images']['tmp_name'][$i];
          $fileerro = $_FILES['images']['error'][$i];


          $accepted = array("jpg","jpeg","png");

          if($fileerro == 0){
              if(in_array(pathinfo($filename,PATHINFO_EXTENSION),$accepted)){
                  $dest = 'uploads/'.$filename;
                  move_uploaded_file($filepath, $dest);
                  $insertquery = "insert into gallery(photo) values('$filename')";
                  $insert = mysqli_query($conn,$insertquery);

                       if($insert){
                           ?>
                            <script>alert("Your File Inserted Successfull");</script>
                           <?php
                        }else{
                          ?>
                            <script>alert("YOur File is Not Inserted");</script>
                         <?php
                 }
              }else{
                  ?>
                      <script>alert("this is not acceptable file");</script>
                  <?php
              }
          }
      }
  }


   //****** image uplods code end hare************

  //************ notice section start**************

  if(isset($_POST['notice_s'])){
    $notice = $_POST['notice'];
    $button = $_POST['button'];
    $filen = $_FILES['files']['name'];
    $filep = $_FILES['files']['tmp_name'];
    $filee = $_FILES['files']['error'];

    if($filee == 0){
       $dest = 'uploads/'.$filen;
       move_uploaded_file($filep,$dest);

       $insertNotice = "insert into notice (item, file, button) values('$notice', '$filen', '$button')";
       $insert = mysqli_query($conn, $insertNotice);

       if($insert){
         ?>
          <script>alert("Your Notice Publish Successfully");</script>
         <?php
       }else{
         ?>
          <script>alert("Your Notice not Publish");</script>
         <?php
       }
    }
  }

//************ crousel image uplod**************
if(isset($_POST['crouseluplod'])){
  for($i=0; $i < count($_FILES['crouselImg']['name']); $i++){

    $filename = $_FILES['crouselImg']['name'][$i];
    $filepath = $_FILES['crouselImg']['tmp_name'][$i];
    $fileerro = $_FILES['crouselImg']['error'][$i];


    $accepted = array("jpg","jpeg","png");

    if($fileerro == 0){
        if(in_array(pathinfo($filename,PATHINFO_EXTENSION),$accepted)){
            $dest = 'uploads/'.$filename;
            move_uploaded_file($filepath, $dest);
            $insertquery = "insert into crousel(cImage) values('$filename')";
            $insert = mysqli_query($conn,$insertquery);

                 if($insert){
                     ?>
                      <script>alert("Your File Inserted Successfull");</script>
                     <?php
                  }else{
                    ?>
                      <script>alert("YOur File is Not Inserted");</script>
                   <?php
           }
        }else{
            ?>
                <script>alert("this is not acceptable file");</script>
            <?php
        }
    }
}
}




//*********** Announcement section start***********

   if(isset($_POST['announce'])){
     $notice = $_POST['notice'];
     $year = $_POST['year'];
     $message = $_POST['message'];
     $button = $_POST['button'];

     $insertAnn = "update announc set notice='$notice', year='$year', message='$message', button='$button' WHERE id = 4";
      $queryAnn = mysqli_query($conn, $insertAnn);
         if($queryAnn){
           ?>
            <script>alert("Your Announcement Updated!");</script>
           <?php
         }
 }
//*********** Announcement section end***********


//*********** staff section start hare*********** 

 if(isset($_POST['Staff'])){
   $name = $_POST['staffName'];
   $Number = $_POST['StaffMob'];
   $subject = $_POST['subject'];
   $staffImg = $_FILES['staffImg']['name'];
   $StaffTemp = $_FILES['staffImg']['tmp_name'];
   $staffError = $_FILES['staffImg']['error'];

   $accepted = array("jpg","jpeg","png");

   if($staffError == 0){
     if(in_array(pathinfo($staffImg,PATHINFO_EXTENSION),$accepted)){
          $dest = 'uploads/'.$staffImg;
          move_uploaded_file($StaffTemp,$dest);

    $query = "INSERT INTO staff (sName, Simage, sNumber, sSubject) VALUE('$name', '$staffImg', '$Number', '$subject')";
    $sql = mysqli_query($conn, $query);

    if($sql){
      ?>
       <script>alert("Your Staff Member Added Successfully");</script>
      <?php
    }else{
      ?>
       <script>alert("Your staff not add");</script>
      <?php
    }

     }
   }
 }

//*********** staff section end hare*********** 

//*********** Topper student section start hare*********** 
if(isset($_POST['Std'])){
  $name = $_POST['stdName'];
  $class = $_POST['stdClass'];
  $per = $_POST['stdPer'];
  $stdImg = $_FILES['stdImg']['name'];
  $stdTemp = $_FILES['stdImg']['tmp_name'];
  $stdError = $_FILES['stdImg']['error'];
  
  $accepted = array("jpg","jpeg","png");

  if($stdError == 0){
    if(in_array(pathinfo($stdImg, PATHINFO_EXTENSION),$accepted)){
      $dest = 'uploads/'.$stdImg;
      move_uploaded_file($stdTemp,$dest);

      $query = "INSERT INTO topper (tName, tClass, tPer,tImg) VALUE('$name', '$class', '$per', '$stdImg')";
      $sql = mysqli_query($conn, $query);

      if($sql){
        ?>
         <script>alert("Your Topper list Added in your list");</script>
        <?php
      }else{
        ?>
         <script>alert("Your Topper list Not added");</script>
        <?php
      }
  
       }
    
    }
  }
//*********** Topper student section end hare*********** 



 ?>
