<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
	<script
    src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.js"> </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
   
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/etrafli.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/javascript.js"></script>
</head>
<body style="padding: 0;margin: 0;">






<section class="NavbarIMG">
  <div class="container-fluid loginRegister">
    <div class="row">
      <div class="col-md-8 GirisQeydiyyat">
        <ul>
          <li class=""><a href="#">Giris</a></li>
          <li class=""><a href="#">Qeydiyyat</a></li>
        </ul>
      </div>
      <div class="col-md-4 social">
        <ul>
            <li>
            <a href="#">
            <i class="fa fa-google-plus" aria-hidden="true">             
            </i>
            </a>
            </li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      
          </ul>
      </div>

    </div> 

 
  </div>

 <!--  NAVBAR -->
 <div class="container-fluid">
    <div class="row">
        <div class="navbar ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                      <a class="navbar-brand navbarLogo" href="#">
                        <img src="<?= base_url(); ?>uploads/home.png">
                      </a>
                </div>
                <div class="navbar-collapse collapse navbarLeft">
                    <ul class="nav navbar-nav navbarUL">
                        <li class=""><a href="#">Ana səhifə</a></li>
                        <li class=""><a href="#">Haqqımızda</a></li>
                        <li class=""><a href="#">Əlaqə</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>  
</div>


</section>


<section>
  
<div class="container-fluid">
  <div class="row">
    
      <div class="col-md-12 elaninAdi">
        <h1>Deniz qiraqi ev</h1>
      </div>

    <div id="myCarousel" class="col-md-8 carousel slide" data-ride="carousel">
      
    
      <!-- Wrapper for slides -->
      <div class="col-md-12">
        <div class="carousel-inner">
      
        <div class="item active">
          <img src="<?= base_url(); ?>uploads/ev1.jpg">
        </div><!-- End Item -->
 
         <div class="item">
          <img src="<?= base_url(); ?>uploads/ev2.jpg">
        </div><!-- End Item -->
        
        <div class="item">
          <img src="<?= base_url(); ?>uploads/ev1.jpg">
        </div><!-- End Item -->
        
        <div class="item">
          <img src="<?= base_url(); ?>uploads/ev2.jpg">
        </div><!-- End Item -->

        <div class="item">
          <img src="<?= base_url(); ?>uploads/ev1.jpg">
        </div><!-- End Item -->

        <div class="item">
          <img src="<?= base_url(); ?>uploads/ev2.jpg">
        </div><!-- End Item -->
                
        </div><!-- End Carousel Inner -->
      </div>

      <div class="col-md-12">
        
      

      <ul class="nav nav-pills nav-justified slider">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"><img src="<?= base_url(); ?>uploads/ev1.jpg"></a></li>
          <li data-target="#myCarousel" data-slide-to="1"><a href="#"><img src="<?= base_url(); ?>uploads/ev2.jpg"></a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#"><img src="<?= base_url(); ?>uploads/ev1.jpg"></a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#"><img src="<?= base_url(); ?>uploads/ev2.jpg"></a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#"><img src="<?= base_url(); ?>uploads/ev1.jpg"></a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#"><img src="<?= base_url(); ?>uploads/ev2.jpg"></a></li>
        </ul>

       </div>

       <div class="col-md-12">
         <div class="evHaqqindaMelumat1">
           <h1>Qiyməti
              <span>$1.500.000</span>
           </h1>
         </div>
         <div class="EvinTesviri">
           <h1>Evin Təsviri</h1>
           <p>Ev dəniz kənarında yerləşir. Tam təmirlidi. Geniş məhləsi və hovuzu var. Falan filan falaan</p>
         </div>
         <div class="evinParametrleri">
           <h1>Parametrler</h1>
            <dl>
                <dt>Sahəsi</dt>
                <dd>900</dd>
                <dt>Əmlakın növü</dt>
                <dd>Villa</dd>        
            </dl>
         </div>
         <div class="evinXeritesi">
           <h1>Xəritə</h1>
           <div class="xerite"></div>
         </div>
         <div class="col-md-12 EvinSahibi paddingMargin1">
           <h1>Elanın Sahibi</h1>
           <div class="col-md-4">
             <img src="<?= base_url(); ?>uploads/g1.jpg">
           </div>
           <div class="col-md-8">
             <div class="EvSahibininMelumatlari">
               <h1>Həsənzadə Günel</h1>
               <p>Men MEn Men Men Men MEn Men Men Men MEn Men Men Men MEn Men Men Men MEn Men Men Men MEn Men Men Men MEn Men Men Men MEn Men Men VE YENEDE MEN )))</p>
               <div class="evSahibininNomresi">
               <a href=""><i class="fa fa-phone" aria-hidden="true"></i> 055 - 555 -55 -55</a>                 
               </div>
               <div class="EvSahibininSocial">
                  <ul>
                    <li>
                       <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li>
                       <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>                   
                  </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
    </div><!-- End Carousel -->

    <div class="col-md-4 ">


      <div class="col-md-12 search">
        <h1 class="searchText">Otaq yoldaşı axtar</h1>
        <form>
          <div class="col-md-12 form-group">
            <label class="sel1" for="sel1">Əmlakın növü:</label>
            <select class="form-control" id="sel1">
              <option>Seçin</option>
              <option>Mənzil</option>
              <option>Həyət evi</option>
              <option>Villa</option>
            </select>
          </div>
          <div class="col-md-12 form-group">
            <label class="sel2" for="sel2">Şəhər:</label>
            <select class="form-control" id="sel1">
              <option>Seçin</option>
              <option>Bakı</option>
              <option>Sumqayıt</option>
              <option>Gəncə</option>
            </select>
          </div>
          <div class="col-md-12 form-group">
            <div class="col-md-12 qiymet">
              <label class="sel3" for="inputdefault">Qiymət:</label>
            </div>
            
            <div class="col-md-6 qiymetmax">
              <input class="form-control" id="inputdefault" type="text" placeholder="max">
            </div>
            <div class="col-md-6 qiymetmin">
              <input class="form-control" id="inputdefault" type="text" placeholder="min">
            </div>
          </div>
           <div class="col-md-12 form-group asaqidanmesafe">
            <div class="col-md-12 otaqSayi">
              <label class="sel3" for="inputdefault">Otaq sayı:</label>
            </div>
            
            <div class="col-md-6 otaqSayimax">
              <input class="form-control" id="inputdefault" type="text" placeholder="max">
            </div>
            <div class="col-md-6 otaqSayimin">
              <input class="form-control" id="inputdefault" type="text" placeholder="min">
            </div>
          </div>
<!--           <div class="col-md-12 axtarisButtonu">
            <button class="btn btn-info btn-lg btn-block axtar">
              <a href="">Axtar</a>
            </button>
          </div> -->
           <div class="YaddaSaxla">
              <button>
                <a href="">Axtar</a>
              </button>
            </div>
        </form>
      </div>

      <div class="col-md-12 sonElanlar">
        <h1>Son Elanlar</h1>
      </div>
      <div class="col-md-12 paddingMargin1">

      <!-- sonElan1 -->
        <div class="col-md-12 paddingMargin1 SonElan1">
          <div class="col-md-6 SonElanlarImg">
            <div>
              <img src="<?= base_url(); ?>uploads/ev1.jpg">
            </div>
          </div>
          <div class="col-md-6 SonElanlarMelumatlari">
            <h6 class="SonElanlarMelumatlariYeri">
              <a href="">Göl kənarı hovuzlu ev</a>              
            </h6>
            <h6 class="SonElanlarMelumatlariQiymeti">Qiyməti</h6>
            <p>Ev göl kənarında yerləşir. Tam təmirlidi. Geniş məhləsi və hovuzu var. Falan filan falaaan</p>
            <div class="SonElanlarMelumatlariIcon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>Goy-goy flan flan flan yerde</p>              
            </div>
            <div class="SonElanlarEtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
            </div>
          </div>
        </div>
        <!-- sonElan2 -->
        <div class="col-md-12 paddingMargin1 SonElan2">
          <div class="col-md-6 SonElanlarImg">
            <div>
              <img src="<?= base_url(); ?>uploads/ev2.jpg">
            </div>
          </div>
          <div class="col-md-6 SonElanlarMelumatlari">
            <h6 class="SonElanlarMelumatlariYeri">
              <a href="">Göl kənarı hovuzlu ev</a>              
            </h6>
            <h6 class="SonElanlarMelumatlariQiymeti">Qiyməti</h6>
            <p>Ev göl kənarında yerləşir. Tam təmirlidi. Geniş məhləsi və hovuzu var. Falan filan falaaan</p>
            <div class="SonElanlarMelumatlariIcon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>Goy-goy flan flan flan yerde</p>              
            </div>
            <div class="SonElanlarEtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
            </div>
          </div>
        </div>

        <!-- SonElan3 -->
        <div class="col-md-12 paddingMargin1 SonElan3">
          <div class="col-md-6 SonElanlarImg">
            <div>
              <img src="<?= base_url(); ?>uploads/ev2.jpg">
            </div>
          </div>
          <div class="col-md-6 SonElanlarMelumatlari">
            <h6 class="SonElanlarMelumatlariYeri">
              <a href="">Göl kənarı hovuzlu ev</a>              
            </h6>
            <h6 class="SonElanlarMelumatlariQiymeti">Qiyməti</h6>
            <p>Ev göl kənarında yerləşir. Tam təmirlidi. Geniş məhləsi və hovuzu var. Falan filan falaan</p>
            <div class="SonElanlarMelumatlariIcon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>Goy-goy flan flan flan yerde</p>              
            </div>
            <div class="SonElanlarEtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
            </div>
          </div>
        </div>




      </div>

    </div>

    </div>
</div>



</section>

<section class="orange">
  <div></div>
</section>


<section class="footer">
  <div container-fluid>
    <div class="col-md-12 FoutureText">
      <p>© 2017 evyoldaşı.az All Rights Reserved.</p>
    </div>
  </div>
</section>





<script type="text/javascript">
  $(document).ready( function() {
    $('#myCarousel').carousel({
    interval:   4000
  });
  
  var clickEvent = false;
  $('#myCarousel').on('click', '.nav a', function() {
      clickEvent = true;
      $('.nav li').removeClass('active');
      $(this).parent().addClass('active');    
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.nav').children().length -1;
      var current = $('.nav li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.nav li').first().addClass('active');  
      }
    }
    clickEvent = false;
  });
});
</script>





<script type="text/javascript">
  $('.EvSahibininSocial ul li').hover(function() {
  $(this).children('a').css({
    color: 'black',
  });
  $(this).css({
    transform: 'translateY(-10px)',
    transition: '300ms all ease'
  });
}, function() {
  $(this).children('a').css({
    color: '#fe5d4c'
  });
  $(this).css({
    transform: 'translateY(0)',
    transition: '300ms all ease'
  });
});
</script>


</body>
</html>