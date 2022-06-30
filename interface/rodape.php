







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
  
</html>
