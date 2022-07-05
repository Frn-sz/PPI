







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
    senhaC.setCustomValidity(" ");
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
 $('.dropdown-trigger').dropdown();

</script>
  
</html>
