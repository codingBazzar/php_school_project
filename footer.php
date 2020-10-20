
<!-- /**************************footer start*******************************/ -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 inner-footer">
        <img class="footer-logo" src="public/images/logo-button.png" alt="logo-img" width="250px">
        <div class="footer-para">
          <p >Address: Ishnath-2, Auraiya, Rautahat, Nepal</p>
          <p style="color:#007bff"><i class="fas fa-phone-volume mr-2"></i><span>+977-9861397375</span></p>
          <a href="mailto:kalakunjebschool@gmail.com?subject=feedback">
          <span>kalakunjebschool@gmail.com</span></a><hr>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 inner-footer">
        <h3>Pages</h3><hr>
        <ul>
        <a class="footer-a"  href="index.php"><li class="footer-li">Home</li></a>
        <a class="footer-a" href="founder.php"><li class="footer-li">Our Founder</li></a>
        <a class="footer-a" href="Principal.php"><li class="footer-li">Our Principal</li></a>
        <a class="footer-a" href="school.php"><li class="footer-li">Our School</li></a>
        <a class="footer-a" href="gallery.php"><li class="footer-li">Gallery</li></a>
        <a class="footer-a" href="contact.php"><li class="footer-li">Contact</li></a>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 inner-footer">
        <h3>Useful Links</h3><hr>
        <ul>
        <a class="footer-a" target="_blank" href="http://www.doe.gov.np/"><li class="footer-li">शिक्षा विभाग सानोठिमी</li></a>
        <a class="footer-a" target="_blank" href="http://www.stro.gov.np/ne/"><li class="footer-li">विद्यालय शिक्षक कितावखाना</li></a>
        <a class="footer-a" target="_blank" href="http://www.ishnathmun.gov.np/"><li class="footer-li">ईशनाथ नगरपालिका</li></a>
        <a class="footer-a" target="_blank" href="http://www.see.gov.np/"><li class="footer-li">माध्यमिक शिक्षा परिक्षा(SEE)</li></a>
        <a class="footer-a" target="_blank" href="http://www.neb.gov.np/"><li class="footer-li">राष्टिय परिक्षा बोड</li></a>
        <a class="footer-a" target="_blank" href="http://www.cred.gov.np/"><li class="footer-li">क्षे.शि.नि., मध्यमान्चल</li></a>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 inner-footer">
      <h3>Useful Links</h3><hr>
        <ul>
          <a class="footer-a" target="_blank" href="http://www.soce.gov.np/"><li class="footer-li">परीक्षा नियन्त्रण कार्यालयर</li></a>
          <a class="footer-a" target="_blank" href="http://scdc.gov.np/"><li class="footer-li">पाठ्यक्रम विकास केन्द्र</li></a>
          <a class="footer-a" target="_blank" href="http://www.tsc.gov.np/"><li class="footer-li">शिक्षक सेवा अायोग</li></a>
          <a class="footer-a" target="_blank" href="http://www.moe.gov.np/"><li class="footer-li">शिक्षा मन्त्रालय</li></a>
          <a class="footer-a" target="_blank" href="https://iemis.doe.gov.np/"><li class="footer-li">शिक्षा, विज्ञान तथा प्रविधि मन्त्रालय</li></a>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="last-footer">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <p>KALA KUNJ SEC. ENG. BORDING SCHOOL, <a target="_blank" href="https://api.whatsapp.com/send?phone=+917700871679">DEVLOPED BY SACHIDA NAND</a></p>
    </div>
    <div class="col-lg-6 col-sm-12  social-media">
        <a href="https://www.facebook.com/kalakunj2055/" target="_blank"><i class="fab fa-facebook-f fa-2x mr-4"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x mr-4"></i></a>
        <a href="https://api.whatsapp.com/send?phone=+9779845133522" target="_blank"><i class="fab fa-whatsapp fa-2x mr-4"></i></a>
    </div>
  </div>
</div>
</div>

<div class="scrolltop float-right">
  <i class="fas fa-arrow-up" onclick="topFunction();" id="arrbtn"></i>
</div>

<!-- /**********************footer End ************************************/ -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
// bootstrap function and method
$(function () {
      $('[data-toggle="tooltip"]').tooltip()
 });


 $('#myModal').on('shown.bs.modal', function () {
       $('#myInput').trigger('focus')
    });

$('.carousel').carousel({
    interval: 3000,
    pause: false
  })




 // scroll bar and arrow function

 const nav = document.getElementById('top-nav'); //navbar fixex
 const scrollbtn = document.getElementById('arrbtn'); //arrow
 window.onscroll = function(){scrollFunction()};
   function scrollFunction(){
     if(document.body.scrollTop >30 || document.documentElement.scrollTop >20){
       //navbar fixed
       nav.style.position = "fixed";
       nav.style.top = 0;

       scrollbtn.style.display = "block";  //arrow show
     }else{
       nav.style.position = "relative"; //navbar relative
       scrollbtn.style.display = "none"; //arrow not show
     }
   }
 function topFunction(){
     document.body.scrollTop = 0; //for safari.
     document.documentElement.scrollTop = 0; //for crome,firefox,opera.
   }

   
  // date and time function
  function display(){
    const date = new Date();
    document.getElementById('time').innerHTML = date.toLocaleDateString('en-US', {
      day:'2-digit',
      weekday:'short',
      month:'short',
      year:'numeric'
    });
  }
  display();
</script>

</body>
</html>
