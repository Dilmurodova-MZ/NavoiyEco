<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--
  assalomu aleykum xurmatli 
  kodni uzicha taxrirlamoqchi bo'lgan dasturchi iltimos 
  kuzingizni qising va umuman bootstrap 4  va bootsrap5 
  umuman ishlatmang bulmasa xammasi ishdan chiqadi 
  pastda turgan yangiliklarga xam surat qushib utirmang qusha olmaysiz buziladi
  yana qaytaraman uzgartish kiritmang !!!!
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavoiyEco</title>
      <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/imgs/logo.png')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/footer.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
<body>
  
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  
  <div class="dropdown">
    <button class="dropbtn">Biz Haqimizda
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Interaktiv Xizmatlar
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Hujjatlar 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Atrof-Muhit
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#contact">Yana</a>
  <a href=""> <i class="fa fa-language" style="font-size:24px;color:red"></i></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="slider">
  <!-- fade css yuza kurinish boshlandi -->
  <div class="myslide fade">
    <div class="txt">
      <button style="border-radius: 30px;"> <h3>Virtual qabulxona</h3></button>
      <p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
    </div>
    <img src="<?php echo base_url('assets/imgs/img1.jpg');?>"  class="imgslide" style="width: 100%; height: 100%;">
  </div>
  
  <div class="myslide fade">
    <div class="txt">
      <button style="border-radius: 30px;"> <h3>Mening fikrim</h3></button>
      <p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
    </div>
    <img src="<?php echo base_url('assets/imgs/img2.jpg');?>"  class="imgslide" style="width: 100%; height: 100%;">
  </div>
  
  <div class="myslide fade">
    <div class="txt">
      <button style="border-radius: 30px;"> <h3>Davlat Xizmatlari</h3></button>
      <p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
    </div>
    <img src="<?php echo base_url('assets/imgs/img3.jpg');?>"  class="imgslide" style="width: 100%; height: 100%;">
  </div>
  
 <!-- <div class="myslide fade">
    <div class="txt">
      <h1>IMAGE 4</h1>
      <p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
    </div>
    <img src="img/img4.jpg"  class="imgslide" style="width: 100%; height: 100%;">
  </div>
  -->
  <div class="myslide fade">
    <div class="txt">
      <button style="border-radius: 30px;"> <h3>Aloqa</h3></button>
      <p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
    </div>
    <img src="<?php echo base_url('assets/imgs/img5.jpg');?>"  class="imgslide" style="width: 100%; height: 100%;">
  </div>
  <!-- /fade css yuza kurinish edi bu -->
  
  <!-- onclick js birmarta bosgandagi js  -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <div class="dotsbox" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <!--<span class="dot" onclick="currentSlide(4)"></span>-->
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>
  <!-- /onclick js tugadi -->
</div>
<!--conrent staart-->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>30 июнь “Ёшлар куни” муносабати билан бошқарма бошлиғи бошқарма ёшлари билан учрашди.</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p style="color:#555;">Navekologiya  Июл 1, 2021</p>
      <p>
        Навоий вилоятида Экология ва атроф-муҳитни муҳофаза қилиш бошқармасида айни дамда ёшлар 46 нафар ёшлар фаолият юритади. Умумий ходимлар сонининг 27 фозини ташкил этиб, ёш…</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
    <div class="card">
      <h2>“Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat”</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Navekologiya  Июл 1, 2021</p>
      <p>Joriy yilning 25-iyun kuni Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasida “Yangi O‘zbekiston istiqboli uchun mas’ulmiz” va “Mustaqillik-buyuk ne’mat” mavzularida maʼnaviyat soati bo‘lib o‘tdi.   Maʼnaviyat soatini Navoiy viloyati Ekologiya va atrof-muhitni muhofaza qilish boshqarmasi boshlig‘i birinchi o‘rinbosari X.Baqoyev so‘zga chiqib ochib berdi.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Yig’ma axborot-tahlil bo’limi</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Kompensatsiya to‘lovlari xisobi va ularning tushumi ustidan nazorat qilish bo‘lim</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">“Atmosfera havosini muhofaza qilish “ bo‘limi</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Ijro intizomini nazorat qilish bo‘limi</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Suv, yer resurslarini va keng tarqalgan qazilma boyliklarini muhofaza qilish bo‘limi</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Chiqindilarning hosil bo‘lishi, to‘planishi, saqlanishi, tashilishi, utilizatsiya qilinishi, qayta ishlanishi, ko‘milishi va realizatsiyasini nazorat qilish inspeksiyasi</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Atrof muhit iflosanishini monitoring qilish bo‘limi</p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Navoiy viloyati ekologiya va atrof muhitni muhofaza qilish boshqarmasi Ekspertiza </p>
    </div>
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p style="font-size:16px; font-weight: 900;">Atrof muhit iflosanishini monitoring qilish bo‘limi</p>
    </div>
    <div class="card">
      <h3>eng kup kurilgan postlar</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Xarakatlar Strategiyasi</h3>
      <p>Besh tashabus</p>
    </div>
  </div>
</div>


<!--<div class="row">
  
  <h2>Hujjatlar to'plami</h2>
  <div class="column" style="background-color:#aaa;">
    <img src="" alt="bu yerda surat turadis">
  <h2>Hujjatlar to'plami</h2>
  <p>Ушбу Қонун табиий муҳит шароитларини сақлашнинг, табиий ресурслардан оқилона фойдаланишнинг ҳуқуқий, иқтисодий ва ташкилий асосларини белгилаб беради. Қонуннинг мақсади инсон ва табиат ўртасидаги муносабатлар уйғун мувозанатда ривожланишини, экология тизимлари, табиат комплекслари ва айрим объектлар муҳофаза қилинишини таъминлашдан, фуқароларнинг қулай атроф муҳитга эга бўлиш ҳуқуқини кафолатлашдан иборатдир.</p>
  </div>
  <div class="column" style="background-color:#bbb;">
  <h2>Column 2</h2>
  <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
  <h2>Column 3</h2>
  <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
  <h2>Column 4</h2>
  <p>Some text..</p>
  </div>
</div>-->

<div class="footer">
  <h2>Footer</h2>
</div>
<!--end-->  
<script src="<?php echo base_url('assets/js/index.js');?>">
</script>        
</body>
</html>