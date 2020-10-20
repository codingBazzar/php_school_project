<?php include 'header.php'; ?>

<!-- carousel section -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
     <img class="d-block w-100" src="public/images/scl-5.jpg" alt="Third slide">
   </div>
   <?php 
    include 'connection.php';

    $sql = "select * from crousel";
    $query = mysqli_query($conn, $sql);

    while($res = mysqli_fetch_assoc($query)){
      ?>
       <div class="carousel-item ">
          <img class="d-block w-100" src="uploads/<?php echo $res['cImage']; ?>" alt="First slide">
       </div>   
      <?php
    }
   ?>
   </div>
 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
<!-- carousel section end-->

<!-- intro section -->

<div class="top-main">
  <div class="container">
     <div class="row clean-top">
       <div class="col-lg-6 col-sm-12">
         <div class="pt-5">
           <h1>Introduction</h1>
           <p>The Insituation Is An English Medium Boarding School Which Was Established In 2055 At Present.
              This Boarding School Is Running Under The Strict Surveillance Of Kala Kunj Secondary English Boarding School.
               And It Conduct The Classes From Nursery To Grade XII. The Motto Of This Institutions Is To Produce Qualified
              And Disciplined Students So That They May Complete In The Educational Field Of The Modern World...</p>
              <a href="school.php"><button class="read-btn" type="button">Read More</button></a>
         </div>
        </div>
         <div class="col-lg-6 col-sm-12 clean-top ">
           <img src="public/images/home-img.png" alt="back-to-school" class="img-fluid img-book">
        </div>
      </div>
    </div>
  </div>

  <!-- intro section end -->

<!-- notice section -->

<div class="notice-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-12 ">
        <div class="main">
        <div class="n-header">
          <h1><span><i class="far fa-calendar-alt"></i></span> notice</h1>
        </div>
         <div class=" scroll">
            <table class="table ">
               <tbody>
                 <?php
                    include 'connection.php';
                      $selectNotice = "select * from notice order by id desc";
                      $notice = mysqli_query($conn,$selectNotice);
                        while ($res = mysqli_fetch_array($notice)) {
                             ?>
                            <tr>
                              <td><span><i class="fas fa-arrow-alt-circle-right mr-1"></i> </span><?php echo $res['item']; ?></td>
                                <td><a href="download.php?id=<?php echo $res['id']; ?>"><?php echo $res['button']; ?></a></td>
                            </tr>
                          <?php
                       }
                    ?>
                </tbody>

           </table>
           </div>
         </div>
        </div>
        <div class="col-lg-7 col-sm-12">
          <div class="notice-side">
            <?php
              include 'connection.php';
              $selectAnnunce = "select * from announc";
              $annunce = mysqli_query($conn, $selectAnnunce);
                while ($res = mysqli_fetch_array($annunce)) {
                   ?>
                     <h1><?php echo $res['notice']; ?></h1>
                     <h4><?php echo $res['year']; ?></h4>
                     <p><?php echo $res['message']; ?></p>
                     <button type="button" class="btn btn-lg btn-success" data-toggle="modal"
                        data-target="#addmision"><?php echo $res['button']; ?></button>
                   <?php
                }

             ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- notice section end -->

<!-- Modal -->

<div class="modal fade" id="addmision" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-body">
        <div class="mb-4">
          <img src="public/images/logo.png" alt="logo" style="width:28rem;">
        </div>
        <form action="index.php" method="post">
         <div class="row">
           <div class="col-lg-6 col-sm-12">
             <div class="form-group">
             <label >Name:</label>
             <input type="text" name="name" class="form-control"  placeholder="Enter Name" required autocomplete="off">
           </div>
           <div class="form-group">
             <label>Gender:</label>
             <select  name="gender" class="form-control">
               <option selected>Choose...</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Other">Other</option>
             </select>
           </div>
           <div class="form-group">
              <label>Admission Class:</label>
              <select class="custom-select" name="class">
                    <option selected >Choose...</option>
                    <option value="Nursary" >Nursary</option>
                    <option value="LKG">LKG</option>
                    <option value="UKG">UKG</option>
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                    <option value="Four">Four</option>
                    <option value="Five">Five</option>
                    <option value="Six">Six</option>
                    <option value="Seven">Seven</option>
                    <option value="Eight">Eight</option>
                    <option value="Nine">Nine</option>
                    <option value="Ten">Ten</option>
              </select>
           </div>
           <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required autocomplete="off">
       </div>
       </div>
       <div class="col-lg-6 col-sm-12">
         <div class="form-group">
            <label>Father's Name:</label>
            <input type="text" name="f_name" class="form-control" placeholder="Enter Father's Name" required autocomplete="off">
        </div>
        <div class="form-group">
           <label>Mother's Name:</label>
           <input type="text" name="m_name" class="form-control" placeholder="Enter Mother's Name" required autocomplete="off">
        </div>
        <div class="form-group">
           <label>Mobile Number:</label>
           <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required autocomplete="off">
        </div>
       </div>
     </div>
    </div>
     <div class="modal-footer">
        <button type="submit" name="form_submit" class="btn btn-success">Apply Now</button>
        </form>
          <button  class="btn btn-danger" data-dismiss="modal">Close</button>
     </div>
   </div>
 </div>
</div>

<!-- model end -->

<div class="container">
  <div class="row">
    <div class="col-lg-3 col-sm-12">
      <div class="main">
      <div class="n-header">
        <h1>राष्ट्र गान</h1>
      </div>
      <div class="text-center my-3">
          <img src="public/images/Flag_of_Nepal.gif" alt="falg ing" width="200px">
      </div>
     <div class="anthem">
     <p>
       सयौं थुँगा फूलका हामी, एउटै माला नेपाली
       सार्वभौम भई फैलिएका, मेची-माहाकाली।</p>
     <p>
       प्रकृतिका कोटी-कोटी सम्पदाको आंचल
       वीरहरूका रगतले, स्वतन्त्र र अटल।</p>
     <p>
       ज्ञानभूमि, शान्तिभूमि तराई, पहाड, हिमाल
       अखण्ड यो प्यारो हाम्रो मातृभूमि नेपाल।  </p>
     <p>
       बहुल जाति, भाषा, धर्म, संस्कृति छन् विशाल
       अग्रगामी राष्ट्र हाम्रो, जय जय नेपाल।</p>
     </div>
    </div>
   </div>
   <div class="col-lg-6 col-sm-12">
     <div class="main">
     <div class="n-header">
       <h1>we shall overcome</h1>
     </div>
    <div class="shall">
    <p>We shall overcome, We shall overcome, We shall overcome someday;
        Oh, deep in my heart, I do believe, We shall overcome someday.
      </p>
    <p>
      The Lord will see us through, The Lord will see us through,
      The Lord will see us through someday;
      Oh, deep in my heart, I do believe,
      We shall overcome someday.
   </p>
    <p>
      We're on to victory, We're on to victory,
      We're on to victory someday;
      Oh, deep in my heart, I do believe,
      We're on to victory someday.
    </p>
    <p>
      We'll walk hand in hand, we'll walk hand in hand,
      We'll walk hand in hand someday;
      Oh, deep in my heart, I do believe,
      We'll walk hand in hand someday.
    </p>
    <p>
      We are not afraid, we are not afraid,
      We are not afraid today;
      Oh, deep in my heart, I do believe,
      We are not afraid today.
    </p>
    <p>
      The truth shall make us free, the truth shall make us free,
      The truth shall make us free someday;
      Oh, deep in my heart, I do believe,
      The truth shall make us free someday.
    </p>
    <p>
      We shall live in peace, we shall live in peace,
      We shall live in peace someday;
      Oh, deep in my heart, I do believe,
      We shall live in peace someday.
    </p>
    </div>
   </div>
  </div>
  <div class="col-lg-3 col-sm-12">
    <div class="main">
    <div class="n-header">
      <h1>school prayer</h1>
    </div>
    <div class="text-center my-3">
        <img src="public/images/saraswati-maa.png" alt="falg ing" class="img-fluid">
    </div>
   <div class="pray">
        <p>oh god!</p>
        <p>the thanks</p>
        <p>for the bless </p>
        <p>on us.</p>
        <p>to be kind and good</p>
        <p>to others</p>
        <p>lead us</p>
        <p>to way</p>
        <p>happy & real life</p>
        <p>with our teacher &
        am en!</p>
   </div>
  </div>
 </div>
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-4 col-sm-12">
      <h1>Development-</h1><hr>
      <p>We believe that reflection and a commitment to continuous improvement lead to success, growth and
      fulfillments, on a personal and school level.
      </p>
    </div>
    <div class="col-lg-4 col-sm-12">
      <h1>Engagement-</h1><hr>
      <p>We believe that the curriculum (in the widest sense) must inspire, motivate and engage the students, whilst
        holding firm to the highest international standards.
      </p>
    </div>
    <div class="col-lg-4 col-sm-12">
      <h1>Relationships-</h1><hr>
      <p>We believe that relationships and effective communication are at the heart of successful education
         and are predicated on empathy and integrity at an inter-personal, community and global level.
      </p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
