$(function(){
  console.log("holamundo");

  $("#error").hide();

  $("#formulario").submit(function (e){
    const DatosPost = {
      user: $('#user').val(),
      pass: $('#pass').val()
    };

    console.log(DatosPost);
    /*Modificar el Url antes de ejecutar*/
    //[Url Remota]
    //let url = "/Login/php/controlador.php";
    //[Url Local]
    let url = "/login-php/php/controlador.php";

    $.post(url, DatosPost, function(response){
        console.log(response);
        if(response == "Incorrecto"){
          $("#error").show();
          $("#formulario").css({'margin-top' : '0px'});
        }
        $("#formulario").trigger("reset");
    });
    e.preventDefault();
  });

})