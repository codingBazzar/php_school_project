<?php include 'header.php'; ?>

    <img class="contact-img" src="public/images/gallery.jpg" alt="top-img">
  <div class="contact-sec">
      <div class="container">
        <div class="contact">
         <div >
            <h1 class="contact-heading">Contact Me</h1>
         </div>
           <div class="icon-sec">
             <i class="fas fa-map-marker-alt fa-2x top-icon"></i>
           </div>
           <div class="contact-cen">
              <h2>School</h2>
              <i class="fas fa-map-marker-alt "></i><span> Kala Kunj Secondary English Bording School</span>
              <p>Ishnath-2, Auraiya, Rautahat, Nepal</p>
              <p>Mobile: +977-9809176648</p>
              <p>Email: kalakunjebschool@gmail.com</p>
        </div>
      </div>

      <div class="cont-footer">
        <h1>GET IN TOUCH:</h1>
      <div class="row">
        <div class="col-lg-10 col-sm-12">
            <form action="contact.php" method="post">
              <div class="form-group">
                   <label >Name*:</label>
                   <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required autocomplete="off" >
              </div>
              <div class="form-group">
                   <label >Mobile No.*:</label>
                   <input type="text" name="mobile" class="form-control" placeholder="Enter your Mobile No" required autocomplete="off" >
              </div>
              <div class="form-group">
                   <label >Email*:</label>
                   <input type="email" name="email" class="form-control" placeholder="Enter your Email" required autocomplete="off" >
              </div>
              <div class="form-group">
                   <label >Message*:</label>
                   <textarea class="form-control" name="message"  rows="3" required ></textarea>
              </div>
              <p id="massege"></p>
                  <button type="submit" name="user-messg" class="btn btn-success p-2 btn-block">Submit</button>
              </form>
            </div>
            <div class="col-lg-2 col-sm-12 mt-4 pt-1 ">
            <div style='width:300px;height:200px;border-top:0px solid #bebebe; border-bottom:0px solid #bebebe;background-color:fff;margin:4px 0 0px 0;'><iframe allowtransparency='true' frameborder='0' scrolling='yes' src='//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/kalakunj2055/;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=197105643690572' style='border:none; overflow:hidden; width:280px; height:290px;'/></iframe></div>
           </div>
         </div>
       </div>
    </div>

    <div class="container-fluid pb-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7124.155277193449!2d85.221834!3d26.773795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x134add3f372e8d14!2sKala%20Kunj%20English%20Boarding%20School!5e0!3m2!1sen!2snp!4v1594817041366!5m2!1sen!2snp"width="100%" height="340" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> 
 </div>
 

 <?php
   include 'connection.php';

   if(isset($_POST['user-messg'])){
     $name = $_POST['name'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     $messageQuery = "insert into message (name, mobile, email, message)
                      values('$name', '$mobile', '$email', '$message')";
     $query = mysqli_query($conn, $messageQuery);

     if($query){
         ?>
           <script type="text/javascript">
              document.getElementById('massege').innerHTML = "Thank You Your Query is Submited!";
              // alert("Thank You Your Query is Submited!");
           </script>
          <?php
       }else{
           ?>
             <script type="text/javascript">alert("not submiited");</script>
       <?php
     }
   }
?>

<?php include 'footer.php'; ?>
