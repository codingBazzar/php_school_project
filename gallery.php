<?php include 'header.php'; ?>

<div class="galler-top">
  <section class="header-sec">
    <div class="center-div">
      <h1 class="g-header animate__animated animate__heartBeat
      animate__infinite animate_delay-2s" >Gallery</h1>
    </div>
  </section>
</div>


<div class="card-main">
  <div class="img-section ">
  <div class="row">
    <?php
      include 'connection.php';
      $selectQuery = "select * from gallery";
      $select = mysqli_query($conn,$selectQuery);

      while($result = mysqli_fetch_array($select)) {
        ?>
        <div class="col-lg-3 col-md-6 col-sm-12 card-sec">
          <div class="card mx-auto mb-4" style="width: 22rem; height:auto;">
                <a href="uploads/<?php echo $result['photo']; ?>">
                  <img class="gallery-img card-img ml-auto " src="uploads/<?php echo $result['photo']; ?>" alt="Card image cap"></a>
           </div>
          </div>
        <?php
      }
     ?>
   </div>
  </div>
</div>



<?php include 'footer.php'; ?>
