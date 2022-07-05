







<script type="text/javascript" src="../materialize/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

<script> 
  //select
  $(document).ready(function(){
    $('select').formSelect();
  });

  //caixa de texto
  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));

  //menu mobile
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>

  <script>

let senha = document.getElementById('senha');
let senhaC = document.getElementById('repetirsenha');

function validarSenha() {
  if (senha.value != senhaC.value) {
    senhaC.setCustomValidity("As senhas não conferem");
    senhaC.reportValidity();
    return false;
  } else {
    senhaC.setCustomValidity("");
    return true;
  }
}

// verificar também quando o campo for modificado, para que a mensagem suma quando as senhas forem iguais
senha.addEventListener('blur', validarSenha);
senhaC.addEventListener('input', validarSenha);


</script>
<script>
  var clicked = 0;

$(".toggle-password").click(function (e) {
   e.preventDefault();

  $(this).toggleClass("toggle-password");
    if (clicked == 0) {
      $(this).html('<span class="material-icons">visibility_off</span >');
       clicked = 1;
    } else {
       $(this).html('<span class="material-icons">visibility</span >');
        clicked = 0;
     }

  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
     input.attr("type", "text");
  } else {
     input.attr("type", "password");
  }
});
   
</script>

<script>
 $('.dropdown-trigger').dropdown();

</script>
  
</html>
