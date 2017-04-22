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
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/javascript.js"></script>
 


    <title>Ana səhifə</title>
  </head>
  <body>


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
                        <img src="<?= base_url() ?>uploads/home.png">
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
    <div class="col-md-8">
      <div class="neseolacaqburda">
        <h1>Burda nese olacaq</h1>
        <h4>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


        </h4>
      </div>
    </div>

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
          <div class="col-md-12 axtarisButtonu">
            <div class="YaddaSaxla">
              <button>
                <a href="">Axtar</a>
              </button>
            </div>
           <!--  <button class="btn btn-info btn-lg btn-block axtar">
              <a href="">Axtar</a>
            </button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>



<!-- sekiller elanlar -->


<section>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 PaddingMarginNol">
      <div class="col-md-6 PaddingMarginNol">
      <div class="imgblock">
        
      
        <div class="img">
          <a href="">
            <img src="<?= base_url() ?>uploads/ev1.jpg">
          </a>
          
        </div>
        <div class="Melumat">
          <div>
             <h3 class="qiymet">$1,500.00</h3>
             <h3 class="EvYerlesdiyiYer">Deniz kenari ev</h3>
             <div class="EtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
              </div>

          </div>
          </div>
        </div>
      </div>



      <div class="col-md-6 PaddingMarginNol">
        <div class="imgblock">
        
      
        <div class="img">
          <a href="">
            <img src="<?= base_url() ?>uploads/ev2.jpg">
          </a>
          
        </div>
        <div class="Melumat">
          <div>
             <h3 class="qiymet">$1,500.00</h3>
             <h3 class="EvYerlesdiyiYer">Deniz kenari ev</h3>
             <div class="EtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
              </div>

          </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 PaddingMarginNol">
        <div class="imgblock">
        
      
        <div class="img">
          <a href="">
            <img src="<?= base_url() ?>uploads/ev3.jpg">
          </a>
          
        </div>
        <div class="Melumat">
          <div>
             <h3 class="qiymet">$1,500.00</h3>
             <h3 class="EvYerlesdiyiYer">Deniz kenari ev</h3>
             <div class="EtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
              </div>

          </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 PaddingMarginNol">
      <div class="imgblock">
        
      
        <div class="img">
          <a href="">
            <img src="<?= base_url() ?>uploads/ev4.jpg">
          </a>
          
        </div>
        <div class="Melumat">
          <div>
             <h3 class="qiymet">$1,500.00</h3>
             <h3 class="EvYerlesdiyiYer">Deniz kenari ev</h3>
             <div class="EtrafliBax">
              <button>
                <a href="">etrafli bax</a>
              </button>
              </div>

          </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 PaddingMarginNol">
      <div class="imgblock">
      
        <div class="img">
          <a href="">
            <img src="<?= base_url() ?>uploads/ev3.jpg">
          </a>
        </div>
        
        <div class="Melumat">
          <div>
             <h3 class="qiymet">$1,500.00</h3>
             <h3 class="EvYerlesdiyiYer">Deniz kenari ev</h3>
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