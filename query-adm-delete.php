<?php
  include 'connection.php';

  // delete massage or query section
     $ids = $_GET['id'];
     $messageDelete = "delete from message where id = $ids";
     $deletemsg = mysqli_query($conn, $messageDelete);
          if($deletemsg){
            ?>
                  <script type="text/javascript">alert("Deleted");</script>
            <?php
          }

    // delete massage or query section ends

    // Delete admission form

    $idss = $_GET['id'];
               $deleteApplication = "delete from adm_form where id = $idss";
                $delete = mysqli_query($conn, $deleteApplication);
                    if ($delete) {
                      ?>
                      <script type="text/javascript">alert("Deleted");</script>
                      <?php
                    }
   header('location:message.php');
 ?>
