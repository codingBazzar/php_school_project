<?php
   session_start();

   if(!isset($_SESSION['admin_name'])){
     header('location:login.php');
  }
 ?>

<?php include 'logout_nav.php'; ?>

<div class="delete-header">
  <marquee behavior="scroll" scrollamount="10" direction="left">
    <h1>STUDENT'S QUERY And ADMISSION APLICATION</h1>
  </marquee>
</div>
<div class="container-fluid">
  <div class="img-delete">
    <div class="delImg-haad">
      <h1>STUDENT QUERY!</h1>
    </div>
      <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NAME</th>
                <th scope="col">MOBILE</th>
                <th scope="col">EMAIL</th>
                <th scope="col">MESSAGE</th>
              </tr>
            </thead>
            <tbody>
              <?php
                 include 'connection.php';

                 $MessageSElect = "select * from message";
                 $select = mysqli_query($conn, $MessageSElect);

                 while ($res = mysqli_fetch_array($select)) {
                   ?>
                   <tr>
                     <td><?php echo $res['name']; ?> </td>
                     <td><?php echo $res['mobile']; ?></td>
                     <td><?php echo $res['email']; ?></td>
                     <td><?php echo $res['message']; ?></td>
                     <td><a href="query-adm-delete.php?id= <?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="fas fa-trash"></i></a> </td>
                   </tr>
                   <?php
                 }
               ?>
            </tbody>
        </table>
     </div>
  </div>
</div>

<div class="container-fluid">
  <div class="img-delete">
    <div class="delImg-haad">
      <h1>STUDENT ADMISSION FORM!</h1>
    </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
             <tr>
               <th scope="col">REFER.</th>
               <th scope="col">NAME</th>
               <th scope="col">FATHER N.</th>
               <th scope="col">MOTHER N.</th>
               <th scope="col">GENDER</th>
               <th scope="col">CLASS</th>
               <th scope="col">MOBILE</th>
               <th scope="col">EMAIL</th>
               <th scope="col">OPERATION</th>
             </tr>
        </thead>
          <tbody>
            <?php
               include 'connection.php';

               $selectApp = "select * from adm_form";
               $queryApp = mysqli_query($conn, $selectApp);

               while ($app = mysqli_fetch_array($queryApp)) {
                 ?>
                   <tr>
                     <td><?php echo $app['refer']; ?></td>
                     <td><?php echo $app['name']; ?></td>
                     <td><?php echo $app['f_name']; ?></td>
                     <td><?php echo $app['m_name']; ?></td>
                     <td><?php echo $app['gender']; ?></td>
                     <td><?php echo $app['class']; ?></td>
                     <td><?php echo $app['mobile']; ?></td>
                     <td><?php echo $app['email']; ?></td>
                     <td><a href="query-adm-delete.php?id= <?php echo $app['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="fas fa-trash"></i></a> </td>
                   </tr>
                   <?php
               }

             ?>

         </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
