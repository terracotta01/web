(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// floating action button

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

//open modal
  $(".myImg").click(function(){
    $("#myModal").css({"display":"block"});
    $("#img01").prop("src", $(this).prop("src"));
    $("#caption").html($(this).prop("alt"));
  });

  // close image by click
  $("#myModal").click(function(){
    $("#myModal").css({"display":"none"});
  });
