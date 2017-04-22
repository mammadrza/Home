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
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/profil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="js/file.js"></script>

</head>
<body>




<section class="NavbarIMG">
  <div class="container-fluid loginRegister">
    <div class="row">
      <div class="col-md-8 GirisQeydiyyat">
        <ul>
          <li class=""><a href="#">Giriş</a></li>
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









<div class="container profil">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4 profilImgDiv">
				<img src="<?= base_url(); ?>uploads/8.jpg" class="profiImg">
			</div>
			<div class="col-md-8">
				<div class="col-md-12 redakte">
					<a href="" class="redakteIcon"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-md-12 profilinSahibi ">
						<!-- <div class="col-md-6 adSoyad"> -->
						<h2 class="agentName"><p>Həsənzadə Günel</p></h2>
						<!-- </div> -->
						<!-- <div class="col-md-6 redakte" >
							<a href="" class="redakteIcon"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</a>
						</div> -->
				</div>
				<div class="col-md-12 adGunu">
					<h4 class="agentDogumTarixi">Doğum tarixi:</h4>
					<h4 class="agentBD">01.01.2001</h4>
				</div>

				<div class="col-md-12 unvan">

					<h4 class="agentUnvan">Ünvan:</h4>

					<p class="agentAdress">Bakı flan flan flan flan flan flan flan flan flan flan flan flan flan flan flan flan flan </p>
				</div>
				<div class="col-md-12 agentTehsil" >
					<h4 class="tehsil">Təhsil:</h4>
					<p class="agentUni">Bakı Dövlət Universiteti</p>
				</div>

				<div class="col-md-12 AgentContact">
					<div class="agentNumber">
							<a href="" class="number"><i class="fa fa-phone" aria-hidden="true" ></i>(123) 123-456</a>

					</div>
					<div class="agentMail">
						<a href="" class="mail"><i class="fa fa-envelope-o" aria-hidden="true" ></i>jennie@example.com</a>
					</div>
				</div>

				<div class="col-md-12 agentSocial">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<button class="addAnnouncement btn btn-secondary btn-lg btn-block"><a href="">Elave et</a></button>
				</div>

			</div>
		</div>
	</div>
</div>




		<div class="container">
			<div class="row">
				<div class="col-md-12 elanlarinSiyahisi">
					<h2 class="ButunElanlar" >Bütün elanlar</h2>
					<!-- <span class="border"></span> -->

				</div>
			</div>
		</div>











<div class="container YerlesdirdiyiElanlarOpaciti">
	<div class="row">




	

		<div class="col-md-12 yerlesdirdiyiElanlar">
			<div class="col-md-4">
				<img class="ElanSekil" src="<?= base_url(); ?>uploads/ev3.jpg" alt="">
			</div>


			<div class="col-md-8">
				<div class="col-md-12 yerlesdiyiYer">
					<h3>Yerleşdiyi yer</h3>
				</div>
				<div class="col-md-12 ">
					<a><i class="fa fa-map-marker Unvan2" aria-hidden="true"></i></a>
					<h4 class="UnvaniHaqqindaMelumat">28 May</h4>
				</div>
				<div class="col-md-12 sahe_OtaqSayi">
					<div class="col-md-12 otaqsayiTop" >
						<h6 class="Sahesi">Sahe</h6>
						<h6 class="OtaqSayiH6">Otaq sayı</h6>
					</div>
					<div class="col-md-12 sahe_OtaqSayi_reqemIle">
						<h6 class="Sahesi">160</h6>
						<h6 class="OtaqSayiH62">3</h6>
					</div>

				</div>


				        <div class="col-md-12 Melumat">
          					<div>
             					<h3 class="qiymet">$1,500.00</h3>
             					
             				<div class="EtrafliBax">
              					<button>
              					 		<a href="">etrafli bax</a>
              					</button>
              				</div>

          					</div>
          				</div>




			</div>
		</div>








		<div class="col-md-12 yerlesdirdiyiElanlar">
			<div class="col-md-4">
				<img class="ElanSekil" src="<?= base_url(); ?>uploads/ev3.jpg" alt="">
			</div>


			<div class="col-md-8">
				<div class="col-md-12 yerlesdiyiYer">
					<h3>Yerleşdiyi yer</h3>
				</div>
				<div class="col-md-12 ">
					<a><i class="fa fa-map-marker Unvan2" aria-hidden="true"></i></a>
					<h4 class="UnvaniHaqqindaMelumat">28 May</h4>
				</div>
				<div class="col-md-12 sahe_OtaqSayi">
					<div class="col-md-12 otaqsayiTop" >
						<h6 class="Sahesi">Sahe</h6>
						<h6 class="OtaqSayiH6">Otaq sayı</h6>
					</div>
					<div class="col-md-12 sahe_OtaqSayi_reqemIle">
						<h6 class="Sahesi">160</h6>
						<h6 class="OtaqSayiH62">3</h6>
					</div>

				</div>


				        <div class="col-md-12 Melumat">
          					<div>
             					<h3 class="qiymet">$1,500.00</h3>
             					
             				<div class="EtrafliBax">
              					<button>
              					 		<a href="">etrafli bax</a>
              					</button>
              				</div>

          					</div>
          				</div>




			</div>
		</div>











		<div class="col-md-12 yerlesdirdiyiElanlar">
			<div class="col-md-4">
				<img class="ElanSekil" src="<?= base_url(); ?>uploads/ev3.jpg" alt="">
			</div>


			<div class="col-md-8">
				<div class="col-md-12 yerlesdiyiYer">
					<h3>Yerleşdiyi yer</h3>
				</div>
				<div class="col-md-12 ">
					<a><i class="fa fa-map-marker Unvan2" aria-hidden="true"></i></a>
					<h4 class="UnvaniHaqqindaMelumat">28 May</h4>
				</div>
				<div class="col-md-12 sahe_OtaqSayi">
					<div class="col-md-12 otaqsayiTop" >
						<h6 class="Sahesi">Sahe</h6>
						<h6 class="OtaqSayiH6">Otaq sayı</h6>
					</div>
					<div class="col-md-12 sahe_OtaqSayi_reqemIle">
						<h6 class="Sahesi">160</h6>
						<h6 class="OtaqSayiH62">3</h6>
					</div>

				</div>


				        <div class="col-md-12 Melumat">
          					<div>
             					<h3 class="qiymet">$1,500.00</h3>
             					
             				<div class="EtrafliBax">
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























</body>
</html>