<? php 
session_start();
include('DbConnection.php');
if(!isset($_SESSION['access_type'])=='Admin'){
header('location:../login.php');
}?> 


<?php include('header.php')?>

<body style="background-color:#e7e7e7;">
<!-- image -->
<section>
<div class="row mt-5" >
<div class="col-12 col-md-6 mt-5">
    <div class="image active mt-5" data-bs-internal="100" >
      <img src="image/about-img.svg" class="d-block w-100" alt="First slide">
    </div>
  </div>
<!-- image ends -->

<!-- accordion -->

  <div class="col-12 col-md-6 mt-5 ">
    <p style="margin-top:80px; font-size:18px; font-weight:bold; margin-right:30px;">Werabe University /WRU/ is one of 
    the public higher educational institutions and it is one among 
      the fourth generation Universities of Ethiopia. It is situated in Werabe town which is located 172 Km southwest of Addis Ababa. 
      The foundation stone of Werabe University was laid on 20th of November 2007 E.C by the former prime Minster his Excellency 
      Ato Haile Mariam Desalegn. The construction of the university was started on a total land area of 136 hectares. 
       Werabe University was started the education program in January 2010 E.C. where the university started the education program there
       was student services[2]. WRU clinic was one of the services that provided for students. WRU clinic started providing 
      services a little bit after the university begins to accept students. Until the end of 2014 the clinic was found around the 
      student cafeteria and wasn’t that much wide and open to serve students, but now it has shifted to the newly built as a health center 
      located at the back of the old building male’s dormitory. Still now it uses the traditional paper based service.</p>
 
  </div>
</div>

</section>

<section>
<div  class="row">
<div class="row row-cols-3 g-3 gy-5" style="width: 100%; background:; padding: 80px 0px;">
<h2 style="color: #006969;font-size: 50px;width:1130px;margin: 15px auto;text-align: center;">About As</h2>
<div class="col" >
    <div class="card" style="margin-left:50px; margin-right:50px;">
    <img src="image/cob.png" style="height: 150px;"/>
      <div class="card-body" >
        <h5 class="card-title"style="font-size:23px; margin-bottom: 15px;text-align: center;">Doctors</h5>
        <p class="card-text" style="font-size:23px;  font-weight: bold; margin-bottom: 15px;text-align: center;" >
         Dr.sisay mekonnen
        </p>
      </div>
    </div>
  </div>
  <div class="col" >
    <div class="card" style="margin-left:50px; margin-right:50px;">
    <img src="image/cob.png" style="height: 150px;"/>
      <div class="card-body">
        <h5 class="card-title" style="font-size:23px; margin-bottom: 15px;text-align: center;">Nurse</h5>
        <p class="card-text" style="font-size:23px;  font-weight: bold; margin-bottom: 15px;text-align: center;">
        Nurse. Hilina Mosha
        </p>
      </div>
    </div>
  </div>
  
  <div class="col" >
    <div class="card" style="margin-left:50px; margin-right:50px;">
    <img src="image/cob.png" style="height: 150px;"/>
      <div class="card-body">
        <h5 class="card-title" style="font-size:23px; margin-bottom: 15px;text-align: center;">Manager</h5>
        <p class="card-text"style="font-size:23px;  font-weight: bold; margin-bottom: 15px;text-align: center;">
          Manager. Girum Girma
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</section>

</body>
<!-- footer section -->
<?php include('footer.php')?>
  <!-- footer section ends -->

  </body>
</html>