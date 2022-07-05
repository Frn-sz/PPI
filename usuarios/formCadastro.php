<title>Formulário de cadastro</title>

<style type="text/css">

/* label focus color */
.input-field input[type=text]:focus + label {
color: #4e342e !important;
}
/* label underline focus color */
.input-field input[type=text]:focus {
border-bottom: 1px solid #4e342e !important;
box-shadow: 0 1px 0 0 #4e342e !important;
}

/* label focus color */
.input-field input[type=email]:focus + label {
color: #4e342e !important;
}
/* label underline focus color */
.input-field input[type=email]:focus {
border-bottom: 1px solid #4e342e !important;
box-shadow: 0 1px 0 0 #4e342e !important;
}

/* label focus color */
.input-field input[type=password]:focus + label {
color: #4e342e !important;
}
/* label underline focus color */
.input-field input[type=password]:focus {
border-bottom: 1px solid #4e342e !important;
box-shadow: 0 1px 0 0 #4e342e !important;
}
/* label focus color */
.input-field textarea:focus + label {
color: #4e342e !important;
}
/* label underline focus color */
.input-field textarea:focus {
border-bottom: 1px solid #4e342e !important;
box-shadow: 0 1px 0 0 #4e342e !important;
}

</style>
<body>

<main>


<?php require_once "../interface/cabecalho.php";
    include_once "../funcoes.php";    

?>


<h3 class="center-align">Cadastro de Usuário:</h3>
<div class="container">
<div class="card-panel grey lighten-4 center-align">
    <form action = "cadastroUsuario.php" method = "post" enctype="multipart/form-data">

    <div class="row">
        <div class="col s12">
           <h4 style = "color:red"> <?= exibeMensagens() ?> </h4>

        </div>
    </div>
<div class="col s6 ">
        <div class="file-field input-field">
          <div class="btn brown darken-4">
          <span><i class = "material-icons">add_a_photo</i></span>
      <input type="file" name = "foto">
      </div>
    <div class="file-path-wrapper">
    <input class="file-path validate" type="text" placeholder="Adicione uma foto de perfil">
  </div>
</div>
</div>
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="nome" type="text" name="nome" required>
                    <label for="nome">Nome</label>
                </div>
            </div>

            
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="email" type="email" name="email" required>
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="senha" type="password" name="senha" class="validate" required>
                    <label for="senha">Senha</label>
                    <span toggle="#senha" class="field-icon toggle-password"><span class="material-icons">visibility</span></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="repetirsenha" type="password" name="repetirSenha" class="validate" required>
                    <label for="repetirsenha">Confirme sua senha</label>
                    <span toggle="#repetirsenha" class="field-icon toggle-password "><span class="material-icons">visibility</span></span>
                </div>
            </div>
    
        <div class="row">
    <div class="col offset-s6">
<a class="btn-floating  waves-effect waves-light brown darken-4"><i class="material-icons">restart_alt</i></a>
  
    <button class="btn-floating waves-effect waves-light brown darken-4" type="submit" name="action">
    <i class="material-icons right">check</i>
    </button>
    </div>
    
    
  
</form>
</div>
</div>
</main>
</body>




<?php require_once "../interface/rodape.php"?>
