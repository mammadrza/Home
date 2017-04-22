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
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/editProf.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/javascript.js"></script>
 
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



<div class="container-fluid Umumiaxtaris">
  <div class="row">
    
    <div class="col-md-6 col-md-offset-3">
      <div class="col-md-12 search">
        <h1 class="searchText">Redaktə et</h1>


        <form class="form-group">
         <!-- <span class="text">Adı:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-user"></span>
               </div>
               <input class="form-control" id="username" name="username" type="text" placeholder="Ad">
          </div>
          <!-- <span class="text">Soyadı:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-user"></span>
               </div>
               <input class="form-control" id="surname" name="surname" type="text" placeholder="Soyad">
          </div>

          <!-- <span class="text">Unvan</span> -->

          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-home"></span>
               </div>
               <input class="form-control" id="unvan" name="unvan" type="text" placeholder="Ünvan">
          </div>

          <!-- <span class="text">tehsil</span> -->

          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-education"></span>
          </div>
               <input class="form-control" id="univer" name="univer" type="univer" placeholder="Təhsil">

          </div>

          <!-- <span class="text">Mobil nömrə:</span> -->

          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-earphone " ><span class="black">&nbsp;&nbsp;+</span><span class="helli">994</span> </span>
               <select id="operator-numbers" name="operator-numbers">
                                <option>55</option>
                                <option>51</option>
                                <option>50</option>
                                <option>70</option>
                                <option>77</option>
                          </select>
          </div>
               <input class="form-control" id="phone_number" name="phone_number" type="number" placeholder="Mobil nömrə" maxlength="7">

          </div>

          <!-- <span class="text">E-poçt ünvanı:</span> -->
            <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-envelope"></span>
               </div>
               <input class="form-control" id="email" name="email" type="email" placeholder="E-poçt ünvanı">
            </div>


          <!-- <span class="text">Doğum tarixi:</span> -->
          <div class="input-group araMesafesi">
               <div class="input-group-addon">
               <span class="glyphicon glyphicon-lock"></span>
               </div>
               <input class="form-control" id="birthday" name="birthday" type="date" placeholder="Doğum tarixi">
            </div>
          <!-- <button type="button" class="btn btn-secondary btn1">Yadda saxla</button> -->
            <div class="YaddaSaxla">
              <button>
                <a href="">Yadda saxla</a>
              </button>
            </div>

        </form>

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