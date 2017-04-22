<!DOCTYPE html>
<html>
  <head>
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
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/registrGiris.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/file.js"></script>



    <title>Giriş</title>
  </head>
  <body>


<section class="NavbarIMG">
  <div class="container-fluid loginRegister">
    <div class="row">
      <div class="col-md-8 GirisQeydiyyat">
        <ul>
          <li class=""><a href="<?= base_url(); ?>">Giriş</a></li>
          <li class=""><a href="<?= base_url(); ?>">Qeydiyyat</a></li>
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
                      <a class="navbar-brand navbarLogo" href="<?= base_url(); ?>index/">
                        <img src="<?= base_url(); ?>uploads/home.png">
                      </a>
                </div>
                <div class="navbar-collapse collapse navbarLeft">
                    <ul class="nav navbar-nav navbarUL">
                        <li class=""><a href="<?= base_url(); ?>/index">Ana səhifə</a></li>
                        <li class=""><a href="<?= base_url(); ?>/index">Haqqımızda</a></li>
                        <li class=""><a href="<?= base_url(); ?>/index">Əlaqə</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>  
</div>



<div class="container-fluid Umumiaxtaris">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
      <div class="col-md-12 search">
        <h1 class="searchText">Giriş et</h1>



        <form class="form-group" method="POST" action="<?= base_url(); ?>">



          <!-- <span class="text">E-poçt ünvanı:</span> -->
            <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-envelope"></span>
               </div>
               <input class="form-control" id="email" name="logemail" type="email" placeholder="E-poçt ünvanı">
            </div>

          <!-- <span class="text">Şifrə:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-lock"></span>
               </div>
               <input class="form-control" id="password" name="logpassword" type="password" placeholder="Şifrə">
          </div>
           <!-- <button type="button" class="btn btn-secondary btn1">Yadda saxla</button> -->
            <div class="YaddaSaxla">
              <button type="submit">
                <a href="">Daxil ol</a>
              </button>
            </div>

        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
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


<script src='<?= base_url(); ?>public/js/javascript.js'></script>
  </body>

</html>