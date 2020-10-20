<?php
   session_start();

   if(!isset($_SESSION['admin_name'])){
     header('location:login.php');
  }
 ?>

<?php include 'logout_nav.php'; ?>


<!-- images uplods section -->
<?php include 'uploads.php'; ?>

<div class="container text-center my-5">
  <div class="row">
    <div class="col uploads-div">
        <h1>Upload your Image Here</h1>
        <form action="mainuploads.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <p>Only Select jpeg, jpg, And png Files & 4 file at time.</p>
            <input type="file" class="form-control" name="images[]" multiple>
          </div>
            <button type="submit" name="uplod" class="btn btn-primary btn-block">Upload</button>
         </form>
       </div>
       <!-- images uplods sectoin end -->




       <!-- Announcement section -->
       <div class="col uploads-div ">
       <form action="mainuploads.php" method="post">
         <h1>Announcement</h1>
         <div class="row">
           <div class="from-group col-3">
             <label class="mb-4">Notice:</label>
             <label class="mb-4">For Year:</label>
             <label class="mb-5 pb-1">Massege:</label>
             <label class="mb-4">button:</label>
           </div>
           <div class="col-9 form-group">
             <?php
                 include 'connection.php';

                 $query = "select * from announc";
                 $select = mysqli_query($conn,$query);
                 while ($res = mysqli_fetch_array($select)) {
                   ?>
                   <input type="text" name="notice" class="form-control mb-2"
                    placeholder="Enter notice" value="<?php echo $res['notice']; ?>">
                   <input type="text" name="year" class="form-control mb-2"
                   placeholder="Enter years of notice" value="<?php echo $res['year']; ?>">
                   <textarea class="form-control mb-1" name="message" rows="2"
                     value="<?php echo $res['message']; ?>"  required></textarea>
                   <input type="text" name="button" class="form-control mb-2"
                   placeholder="Enter Button name" value="<?php echo $res['button']; ?>">
				    <a href="uploads.php?id=<?php echo $res['id']; ?>"><button type="submit" name="announce" class="btn btn-primary btn-block mt-3">Submit</button></a>
                   <?php
                 }
              ?>
           </div>
         </div>

       </form>
   </div>
 </div>
 <!-- Announcement section End-->

<!-- notice section -->
    <div class="uploads-div mt-5">

       <form action="mainuploads.php" method="post" enctype="multipart/form-data">
          <h1 class="mb-5">NOTICE with file!</h1>
            <div class="row">
              <div class="col-lg-5 form-group">
                  <label>Enter Notice Here:</label><br>
                  <label class="mt-4">Choose file:</label><br>
                  <label class="mt-4">Button:</label>
                 </div>
                   <div class="col-lg-7 form-group">
                       <input type="text" name="notice" class="form-control" placeholder="Enter Notice">
                       <input type="file" name="files" class="form-control mt-2" >
                       <input type="text" name="button" value="Download" class="form-control mt-2">
                  </div>
              </div>
              <button type="submit" name="notice_s" class="btn btn-primary btn-block">Submit</button>
          </form>
    </div>

    <!-- notice section end  -->

<!-- crousel section start  -->
    <div class="uploads-div mt-5">
       <form action="mainuploads.php" method="post" enctype="multipart/form-data">
          <h1>Crousel Photo!</h1>
          <p class="mb-5"><span class="text-warning">image must be 1000x425 px</span> & Only Select jpeg, jpg, And png Files</p>
            <div class="row">
              <div class="col-3 form-group">
                  <label>Choose file:</label>
                 </div>
                   <div class="col-9 form-group">
                       <input type="file" name="crouselImg[]" class="form-control" multiple>
                  </div>
              </div>
              <button type="submit" name="crouseluplod" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
   </div>

<!-- crousel section end  -->

<!-- staff details upload section  -->

<div class="container text-center my-5">
  <div class="row">
    <div class="col uploads-div">
        <h1>Upload Staff Information</h1>
        <form action="mainuploads.php" method="post" enctype="multipart/form-data">
        <div class="row">
           <div class="from-group col-3">
             <label class="mb-4">Name:</label>
             <label class="mb-4">Mobile:</label>
             <label class="mb-4">subject:</label>
             <label class="mb-4">Photo:</label>
           </div>
           <div class="col-9 form-group">
               <input type="text" name="staffName" class="form-control mb-2" placeholder="Staff name">
                <input type="text" name="StaffMob" class="form-control mb-2" placeholder="Mobile number">
               <input type="text" name="subject" class="form-control mb-2" placeholder="Subject Name">
               <input type="file" name="staffImg" class="form-control mb-2">
               <button type="submit" name="Staff" class="btn btn-primary btn-block mt-3">Submit</button>
           </div>
         </div>
         </form>
       </div>
      <!-- staff details upload section end -->





       <!--Student information section -->
       <div class="col uploads-div ">
       <h1>Topper student Information</h1>
       <form action="mainuploads.php" method="post" enctype="multipart/form-data">
         <div class="row">
           <div class="from-group col-3">
             <label class="mb-4">Name:</label>
             <label class="mb-4">Class:</label>
             <label class="mb-4">Percentage:</label>
             <label class="mb-4">Photo:</label>
           </div>
           <div class="col-9 form-group">
               <input type="text" name="stdName" class="form-control mb-2" placeholder="student name">
                <input type="text" name="stdClass" class="form-control mb-2" placeholder="Class number">
               <input type="text" name="stdPer" class="form-control mb-2" placeholder=" percentage">
               <input type="file" name="stdImg" class="form-control mb-2">
               <button type="submit" name="Std" class="btn btn-primary btn-block mt-3">Submit</button>
           </div>
         </div>
       </form>
   </div>
 </div>
</div>
 <!--Student information section end-->



<?php include 'footer.php'; ?>
