<!-- Delete images from gallery start -->

<?php
   include 'connection.php';
   $ids = $_GET['id'];

   $delete_folder = "select * from gallery where id=$ids";
   $imgquery1 = mysqli_query($conn, $delete_folder) or die("failed");
   $result = mysqli_fetch_array($imgquery1);

   unlink("uploads/".$result['photo']);
   $deleteimg = "delete from gallery where id=$ids";
   $imgquery = mysqli_query($conn, $deleteimg);
          if($imgquery){
            ?>
               <script type="text/javascript">alert("Image Deleted");</script>
           <?php
          }


// <!-- Delete images gallery end here -->


// <!-- delete dynamic crousel image  -->

   // include 'connection.php';
   $id = $_GET['id'];

   $deleteFile = "select * from crousel where cId=$id";
   $query1 = mysqli_query($conn, $deleteFile) or die("failed");
   $result = mysqli_fetch_array($query1);

   unlink("uploads/".$result['photo']);
   $deleteimg = "delete from crousel where cId=$ids";
   $imgquery = mysqli_query($conn, $deleteimg);
          if($imgquery){
            ?>
               <script type="text/javascript">alert("Image Deleted");</script>
           <?php
          }

// <!-- delete dynamic crousel image end -->

// <!-- topper delete start here  -->
// <?php
//    include 'connection.php';
   $id = $_GET['id'];

   $deleteFile = "select * from topper where tId=$id";
   $query1 = mysqli_query($conn, $deleteFile) or die("failed");
   $result = mysqli_fetch_array($query1);

   unlink("uploads/".$result['tImg']);
   $deleteimg = "delete from topper where tId=$ids";
   $imgquery = mysqli_query($conn, $deleteimg);
          if($imgquery){
            ?>
               <script type="text/javascript">alert("Image Deleted");</script>
           <?php
          }
// ?>
// <!-- topper delete end here  -->

// <!-- staff delete start  -->
// <?php
//    include 'connection.php';
   $id = $_GET['id'];

   $deleteFile = "select * from staff where sId=$id";
   $query1 = mysqli_query($conn, $deleteFile) or die("failed");
   $result = mysqli_fetch_array($query1);

   unlink("uploads/".$result['sImage']);
   $deleteimg = "delete from staff where sId=$ids";
   $imgquery = mysqli_query($conn, $deleteimg);
          if($imgquery){
            ?>
               <script type="text/javascript">alert("Image Deleted");</script>
           <?php
          }
// ?>
// <!-- staff delete end -->


// <!-- // delete notice hare -->
//         <?php
//             include 'connection.php';
    
            $notiId = $_GET['id'];
            $delete_folder = "select * from notice where id=$ids";
            $noticequery1 = mysqli_query($conn, $delete_folder) or die("failed");
            $resultn = mysqli_fetch_array($noticequery1);

            unlink("uploads/".$resultn['file']);

            $delete = "delete from notice where id = $notiId";
            $ndelete = mysqli_query($conn, $delete);

              if($ndelete){
                ?>
                   <script type="text/javascript">alert("Notice deleted");</script>
               <?php
              }
// delete notice hare

        ?>
         <script type="text/javascript">
           location.replace("maindelete.php");
         </script>
     <?php

  ?>
 

