<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style media="screen">
  * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  display: none;
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 50px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

  </style>

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo" ><img src="images/logo.png" class="logo" alt="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="virtuve.php" >Virtuvės baldai</a></li>
        <li><a href="svetaine.php">Svetainės baldai</a></li>
        <li><a href="sistemos.php">Slankiojančios sistemos</a></li>
        <li><a href="#apieMus">Apie mus</a></li>
        <li><a href="#kontaktai">Kontaktai</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="virtuve.php" >Virtuvės baldai</a></li>
        <li><a href="svetaine.php">Svetainės baldai</a></li>
        <li><a href="sistemos.php">Slankiojančios sistemos</a></li>
        <li><a href="#apieMus">Apie mus</a></li>
        <li><a href="#kontaktai">Kontaktai</a></li>
      </ul>
      <a class="black-text" href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

        <!-- Icon Section -->
      <div class="row">
        <div class="col s12 center">
          <br>
          <h4>Atliktų darbų su slankiojančiomis sistemomis ir spintų pavyzdžiai </h4>
        </div>
      </div>
      <div class="row" >
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img class="myImg" src="images/sistemos1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img class="myImg" src="images/sistemos2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img class="myImg" src="images/sistemos3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img class="myImg" src="images/sistemos4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img class="myImg" src="images/sistemos5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img class="myImg" src="images/sistemos6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal Content (The Image)-->
        <!-- The Close Button -->
        <span class="close">&times;</span>

        <img class="slideshow-container" id="img01">
        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption"></div>-->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div class="slideshow-container">
          <div class="row" >
            <div class="col s12 m6 l4" style="width:100%">
              <div  class="mySlides fade" >
                <div class="numbertext">1 / 6</div>
                <img src="images/sistemos1.jpg" alt="" >
              </div>
            </div>
            <div class="col s12 m6 l4" style="width:100%">
              <div  class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="images/sistemos2.jpg" alt="">
              </div>
            </div>
            <div class="col s12 m6 l4" style="width:100%">
              <div  class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="images/sistemos3.jpg" alt="">
              </div>
            </div>
            <div class="col s12 m6 l4" style="width:100%">
              <div  class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="images/sistemos4.jpg" alt="">
              </div>
            </div>
            <div class="col s12 m6 l4" style="width:100%">
              <div  class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="images/sistemos5.jpg" alt="">
              </div>
            </div>
            <div class="col s12 m6 l4" style="width:100%">
              <div  class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="images/sistemos6.jpg" alt="">
              </div>
            </div>

          </div>
        </div>
      <div class="row">
        <div class="col s12 center">
          <table >
            <tr>
              <th>Profesionalus projektavimas</th>
              <th>Nemokamas montavimas</th>
              <th>Kokybiški ir patogūs baldai</th>
              <th>Geriausia kaina</th>
              <th>Nemokamas pristatymas</th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- fixed action button -->
  <div class="fixed-action-btn susisiekime">
    <button  id="download-button" class="btn-large waves-effect waves-light btn amber darken-4 modal-trigger orderButton" data-target="modal1"><b>Turite klausimų? Susisiekime</b></button>
  </div>
  <!-- iššokanti forma -->

  <?php
      include ('app/views/content.php');
  ?>

  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="images/sistemos7.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal brown lighten-5 black-text">
    <div  class="container">
      <div  class="row">
        <div class="col l6 s12">
          <h5 class="black-text" id="apieMus">Apie mus</h5>
          <p class="black-text">Guobos baldai – tai nestandartinių baldų projektavimas ir gamyba pagal individualius užsakymus. Mes gaminame: virtuvės, prieškambario, miegamojo, vonios, svetainės, biuro, vaiko kambario baldus, slankiojančias sistemas ir visus kitus nestandartinius baldus.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="black-text">Nuorodos</h5>
          <ul >
            <li ><a class="black-text" href="index.php">Pradžia</a></li>
            <li><a class="black-text" href="virtuve.php">Virtuvės baldai</a></li>
            <li><a class="black-text" href="svetaine.php">Svetainės baldai</a></li>
            <li><a class="black-text" href="sistemos.php">Slankiojančios sistemos</a></li>
          </ul>
        </div>
        <div  class="col l3 s12">
          <h5 class="black-text" id="kontaktai">Kontaktai</h5>
          <ul>
            <li>Laisvės pr. 60, Vilnius</li>
            <li><a class="black-text" href="callto:+37065669099">Tel: +37065669099</a></li>
            <li><a class="black-text" href="http://www.guobosbaldai.lt">www.guobosbaldai.lt</a></li>
            <li><a class="black-text" href="mailto:info@guobosbaldai.lt">info@guobosbaldai.lt</a></li>
          </ul>
          <a class="black-text" href="https://www.facebook.com/Guobos-baldai-246022925538150/" target="_blank">
            <i  class="fa fa-facebook-official" style="font-size:36px"></i>
          </a>
          <a class="black-text" href="https://twitter.com/" target="_blank">
            <i class="fa fa-twitter-square" style="font-size:36px"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-copyright black-text" >
      <div class="container" >
      Made by <a class="black-text">Vaida, Aivaras, Asta</a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
      $(".myImg").click(function(){
        $("#myModal").css({"display":"block"});
        $(".slideshow-container").css({"display":"block"});
        $("#img01").prop("src", $(this).prop("src"));
        $("#caption").html($(this).prop("alt"));
      
      });

      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
      showSlides(slideIndex += n);
      }

      function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");

      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }

      slides[slideIndex-1].style.display = "block";
      }

  </script>

  </body>
</html>
