<?php
 include_once 'header.php';
?>


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
              <img id="img1" class="myImg" src="images/sistemos1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="img2" class="myImg" src="images/sistemos2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img  id="img3" class="myImg" src="images/sistemos3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img  id="img4" class="myImg" src="images/sistemos4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="img5" class="myImg" src="images/sistemos5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="img6" class="myImg" src="images/sistemos6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal Content (The Image)-->
        <!-- The Close Button -->
        <span class="close">&times;</span>
        <input type="text" id="imageNumber" value="" hidden>
        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption"></div>-->
        <a class="prev" id="back" >&#10094;</a>
        <div class="box2">
        </div>
        <a class="next" id="forward" >&#10095;</a>
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

  <?php
      include_once 'footer.php';
    ?>