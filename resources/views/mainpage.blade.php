<!DOCTYPE html>
<html>
    
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' href="./pages/cssproject.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly" defer></script>
    <script src=".js/project.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
</head>

  

<header class="header">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img class="logo" src="./images/logotip.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#"> {{__('lang.1buttonhead')}} <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutuss"> {{__('lang.2buttonhead')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#towarsilka"> {{__('lang.3buttonhead')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#contactsilka"> {{__('lang.4buttonhead')}}</a>
        </li>
       
        <li class="nav-item"> 
          <a class="nav-link "style="margin-left:920px" href = "/ex/public/mainpage/en" name="english" value = "english">EN</a>
        </li>
          
        <li class="nav-item">
          <a class="nav-link " href="/ex/public/mainpage/ru" name="russian">RU</a>
        </li>
      
      </ul>
    </div>
  </nav>
</header>
<body>

    
<div class="main">

  
    <h1>Aqshat Sauda Uiy</h1>
    <a href="#aboutuss"><button id="aboutus" type="button" class="btn btn-dark"> {{__('lang.2buttonhead')}}</button></a>
</div>
<div  id="aboutuss"></div>
<hr>

<div class="aboutuss">
    <h1 id = "ds"> {{__('lang.2buttonhead')}}</h1>
   <p class="textaboutus"> {{__('lang.aboutUs')}}</p>
    
<div class="content">
  <img class="mySlides" src="./images/slide1.jpg" style="width:100%;">
  <img class="mySlides" src="./images/slide2.jpg" style="width:100%; display:none">
  <img class="mySlides" src="./images/slide3.jpg" style="width:100%;display:none">
  <img class="mySlides" src="./images/slide4.jpg" style="width:100%;display:none">
  <img class="mySlides" src="./images/slide5.jpg" style="width:100%;display:none">
  <img class="mySlides" src="./images/slide6.jpg" style="width:100%;display:none">
  <img class="mySlides" src="./images/slide7.jpg" style="width:100%;display:none">

  <div class="underslide">
    <div class="dicsas">
      <img class="unders" src="./images/slide1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    
      </div>
    <div class="dicsas">  <img class="unders" src="./images/slide2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
      </div>
    <div class="dicsas">
      <img class="unders" src="./images/slide3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
    <div class="dicsas">
      <img class="unders" src="./images/slide4.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)">
    </div>
    <div class="dicsas">
      <img class="unders" src="./images/slide5.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(5)">
    </div>
    <div class="dicsas">
      <img class="unders" src="./images/slide6.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(6)">
    </div>
    <div class="dicsas" id="towarsilka">
      <img class="unders" src="./images/slide7.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(7)">
    </div>
   
  </div>
</div>
</div>



<hr>
  
<div class="towar">
    <p id="towars">{{__('lang.10product')}}</p>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="https://images.satu.kz/121332236_w640_h640_otsev-0-5-mm.jpg" alt="Фракция 0-5мм"><p class="product"> {{__('lang.1product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="./images/towar2.jpg" alt="СЩП0-40с1"> <p class="product">{{__('lang.2product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="./images/towar3.jpg" alt="СЩП0-80с4s"><p class="product"> {{__('lang.3product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="./images/towar4.jpg" alt=""><p  class="product"> {{__('lang.4product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="https://images.kz.prom.st/3097561_w440_h440_scheben-fraktsii-10-20.jpg" alt=""><p class="product"> {{__('lang.5product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="./images/towar6.jpg" alt=""><p class="product"> {{__('lang.6product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="./images/towar7.jpg" alt=""><p class="product"> {{__('lang.7product')}}</p></div>
<div class="ap" data-aos="zoom-in"><img class="avatar" src="https://images.satu.kz/3149801_w640_h640_scheben-fraktsii-40-70.jpg" alt=""><p class="product"> {{__('lang.8product')}}</p></div>
<div class="ap" data-aos="zoom-in" id="contactsilka"><img class="avatar" src="./images/towar9.jpg" alt=""><p class="product"> {{__('lang.9product')}}</p>
</div>
</div>
<div class = "kk">
  <h1 style="text-align: left; margin-left: 300px; margin-bottom: 50px;"> {{__('lang.1contact')}}</h1>
  <form class="form">
    
    <div class="form-group">
      <label for="exampleInputEmail1"> {{__('lang.1review')}}</label>
      <input name="email"  type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      
   
      <label for="exampleFormControlTextarea1"> {{__('lang.2review')}}</label>
      <input name="name" type="text" class="form-control" placeholder="Имя" aria-label="Имя" aria-describedby="basic-addon1">
    
      <label for="exampleFormControlTextarea1"> {{__('lang.3review')}}</label>
      <textarea name="review" class="form-control" id="exampleFormControlTextarea1" rows="5" style="width:530px;"></textarea>
      <div class="uploadfile">
     
      <input type="file" class="form-control" name="image" style="margin-bottom:10px;">
      </div>
      <a href="/ex/public/mainpage/uploadfile" class="btn btn-outline-light" > {{__('lang.4review')}}</a>
    </div>
   

  </form>


  <div class="wrap">
<div class="contacts">

  <h2> {{__('lang.2contact')}}</h2>
  <p style="width: 350px;"> {{__('lang.3contact')}}</p>
  <p> {{__('lang.4contact')}}</p>
</div>
<div class="address" >
  <h2> {{__('lang.5contact')}}</h2>
<p style="width: 350px;"> {{__('lang.7contact')}}</p></div>


  </div>
</div>
<div data-aos="zoom-out" id="map"></div>

</body>
<script>
   AOS.init();
   
  
</script>
</html>