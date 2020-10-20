<?php include 'header.php'; ?>

<div class="text-center staff-top">
    <h1>School Topper List</h1>
</div>

<div class="container">
  <div class="my-5 ">
  <div class="">
  <div class="row">
    <?php 
      include 'connection.php';
      $query = "SELECT * FROM topper";
      $sql = mysqli_query($conn, $query);

      while($res = mysqli_fetch_array($sql)){
           ?>
       <div class="col-lg-3 col-md-6 col-sm-12 mb-3 staff">
         <div class="card">
              <img class="card-img-top" src="uploads/<?php echo $res['tImg']; ?>" alt="Card image cap">
              <ul class="list-group list-group-flush">
                 <li class="list-group-item">Name:-<?php echo $res['tName'] ?> </li>
                 <li class="list-group-item">Mobile:-<?php echo $res['tClass'] ?> </li>
                 <li class="list-group-item">Subject:-<?php echo $res['tPer'] ?> </li>
              </ul>
          </div>
        </div>
           <?php
        }  
      ?>
    </div>
  </div>
</div>
</div>

<?php include 'footer.php'; ?>