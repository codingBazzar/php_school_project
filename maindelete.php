<?php
   session_start();

   if(!isset($_SESSION['admin_name'])){
     header('location:login.php');
  }
 ?>

<?php include 'logout_nav.php'; ?>

<div class="delete-header">
  <marquee behavior="scroll" scrollamount="10" direction="left">
    <h1>DELETE SECTION PLEASE ALERT AND CHECK BEFORE DELETE ANY ITEM!</h1>
  </marquee>
</div>

<!-- gallery image  -->
<div class="container">
   <div class="img-delete ">
    <div class="delImg-haad">
      <h1>Delete Gallery Images Here!</h1>
    </div>
    <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">PICTURE</th>
          <th scope="col">OPERATION</th>
        </tr>
      </thead>
      <tbody>

        <?php
           include 'connection.php';

           $selectQuery = "select * from gallery order by id desc";
           $query = mysqli_query($conn,$selectQuery);
           while ($res = mysqli_fetch_array($query)) {
             ?>
            <tr>
             <td><img src="uploads/<?php echo $res['photo']; ?>" alt="pictures" style="width:8rem;"></td>
             <td><a href="img-delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="right" title="Delete">
               <i class="fas fa-trash"></i></a></td>
           </tr>
           <?php
           }
         ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
<!-- gallery image end  -->

<!-- Dynamic crousel image satrt  -->
<div class="container">
   <div class="img-delete ">
    <div class="delImg-haad">
      <h1>Delete Crousel Dynamic image hare!</h1>
    </div>
    <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">PICTURE</th>
          <th scope="col">OPERATION</th>
        </tr>
      </thead>
      <tbody>

        <?php
           include 'connection.php';

           $selectQuery = "select * from crousel order by cId desc";
           $query = mysqli_query($conn,$selectQuery);
           while ($res = mysqli_fetch_array($query)) {
             ?>
            <tr>
             <td><img src="uploads/<?php echo $res['cImage']; ?>" alt="pictures" style="width:8rem;"></td>
             <td><a href="img-delete.php?id=<?php echo $res['cId']; ?>" data-toggle="tooltip" data-placement="right" title="Delete">
               <i class="fas fa-trash"></i></a></td>
           </tr>
           <?php
           }
         ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
<!-- Dynamic crousel image end  -->

<!-- delete notice hare  -->
<div class="container">
  <div class="img-delete">
    <div class="delImg-haad">
      <h1>delete notice hare!</h1>
    </div>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">notice</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
            $select = "select * from notice order by id desc";
            $query = mysqli_query($conn, $select);
            while ($res = mysqli_fetch_array($query)) {
              ?>
                <tr>
                   <td><?php echo $res['item']; ?></td>
                   <td><a href="img-delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="right" title="Delete">
                     <i class="fas fa-trash"></i></a></td>
                </tr>
                <?php
            }
         ?>
      </tbody>
     </table>
    </div>
  </div>

<!-- delete notice hare end -->

<!-- delete staff start  -->

<div class="container">
  <div class="img-delete">
    <div class="delImg-haad">
      <h1>Delete staff Details hare!</h1>
    </div>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Photo</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
            $select = "select * from staff order by sId desc";
            $query = mysqli_query($conn, $select);
            while ($res = mysqli_fetch_array($query)) {
              ?>
                <tr>
                   <td><img src="uploads/<?php echo $res['sImage']; ?>" alt="pictures" style="width:4rem;"></td>
                   <td><?php echo $res['sName']; ?></td>
                   <td><a href="img-delete.php?id=<?php echo $res['sId']; ?>" data-toggle="tooltip" data-placement="right" title="Delete">
                     <i class="fas fa-trash"></i></a></td>
                </tr>
                <?php
            }
         ?>
      </tbody>
     </table>
    </div>
  </div>

<!-- delete staff end  -->

<!-- delete Topper section start hare  -->
<div class="container">
  <div class="img-delete">
    <div class="delImg-haad">
      <h1>Delete Topper's Information hare!</h1>
    </div>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Photo</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
            $select = "select * from topper order by tId desc";
            $query = mysqli_query($conn, $select);
            while ($res = mysqli_fetch_array($query)) {
              ?>
                <tr>
                   <td><img src="uploads/<?php echo $res['tImg']; ?>" alt="pictures" style="width:4rem;"></td>
                   <td><?php echo $res['tName']; ?></td>
                   <td><?php echo $res['tClass']; ?></td>
                   <td><a href="img-delete.php?id=<?php echo $res['tId']; ?>" data-toggle="tooltip" data-placement="right" title="Delete">
                     <i class="fas fa-trash"></i></a></td>
                </tr>
                <?php
            }
         ?>
      </tbody>
     </table>
    </div>
  </div>


<!-- delete Topper section end hare  -->


<?php include 'footer.php'; ?>
