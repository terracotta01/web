$("button").click(function () {
  // $("#result").val("");
  var senojiReiksme = $("#result").val();
  var naujojiReiksme = senojiReiksme + $(this).text();

  $("#result").val(naujojiReiksme);
  if ($(this).text() == "="){
    var result = eval(senojiReiksme);
    $("#result").val(result);
  }

  if ($(this).text() == "C"){
    $("#result").val("");
    return;
  }

});
