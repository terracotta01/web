<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content white" id="formContent" >
    <!-- The Close Button -->
      <span class="close">&times;</span>
    <div class="row center black-text text-darken-2">
      <h5><b>Užsakymo forma</b></h5>
    </div>
    <div class="row">
      <form id="contact" action="index.php" method="post" class="col s12 forma">
        <div class="row modal-form-row">
          <div class="input-field col s12">
            <input id="first" type="text" name="vardas" class="validate" required autofocus>
            <label for="first">Įrašykite savo vardą</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="second" type="email" name="email" class="validate" required>
            <label for="second">Įrašykite savo elektroninio pašto adresą</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="third" type="text" name="message" class="materialize-textarea validate" required></textarea>
            <label for="third">Aprašykite savo svajonių baldą, o mes jį pagaminsime</label>
          </div>
        </div>
        <button class="modal-action modal-close btn waves-effect waves-light btn amber darken-4" name="submit" type="submit" id="contact-submit">Pateikti Užklausą</button>
      </form>
    </div>
  </div>

</div>
