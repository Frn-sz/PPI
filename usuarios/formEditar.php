<body>
<main>

<?php include('../interface/cabecalho.php'); ?>
<div class="container">
<form>
<div class="row">
        <div class="input-field">
        <input type="text" name="nome" id="nome" class="validate">
        <label for = "nome">Nome</label>
        </div>
    </div>
<div class="row">
<div class="input-field">
        <input type="text" name="email" id="email" class="validate">
        <label for = "email">E-mail</label>
        </div>
</div>
<div class="row">
<div class="col offset-s5   ">
<button type="submit" class="btn-large brown darken waves-light waves-effect">Realizar Edição</button>
</div>
</div>


</form>
</div>

</main>
</body>

<?php include('../interface/rodape.php'); ?>