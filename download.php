<?php
  include 'connection.php';

    if(isset($_GET['id'])){
      $id = $_GET['id'];

      $sql = "select * from notice where id = $id";
      $result = mysqli_query($conn, $sql);
      $file = mysqli_fetch_assoc($result);
      $filepath = 'uploads/'.$file['file'];

      if(file_exists($filepath)){
          header('Content-Type: application/octet-stream');
          header('Content-Description: File Transfer');
          header('Content-Disposition: attachment; filename=' .
          basename($filepath));
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma:public');
          header('Content-Length:'.filesize('uploads/'.$file['file']));
          readfile('uploads/' .$file['file']);

          $newCount = $file['downloads'] + 1;
          $updateQuery = "update notice set downloads=$newCount where id = $id";

          mysqli_query($conn,$updateQuery);
          exit;
      }
    }
 ?>
