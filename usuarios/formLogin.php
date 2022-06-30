<title>Formulário de login</title>

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
.input-field input[type=date]:focus + label {
color: #4e342e !important;
}
/* label underline focus color */
.input-field input[type=date]:focus {
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


<?php require_once "../interface/cabecalho.php"?>

<h3 class="center-align">Login:</h3>

<div class="container">   
    <form action = "login.php" method = "post" enctype="multipart/form-data">

            
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="email" type="text" name="email">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <input id="senha" type="text" name="senha">
                    <label for="senha">Senha</label>
                </div>
            </div>
           
        <div class="row">
    <div class="col offset-s6">
<a class="btn-floating  waves-effect waves-light brown darken-4"><i class="material-icons">restart_alt</i></a>
  
    <button class="btn-floating waves-effect waves-light brown darken-4" type="submit" name="action">
    <i class="material-icons right">check</i>
    </button>
    </div>
    </div>
    
  
</form>

</main>
</body>




<?php require_once "../interface/rodape.php"?>
