<?php include_once("../includes/header.php"); ?>

<div class="container">
    <div class="bg-danger" id="titulo">
        <h3>Cadastrar</h3>
    </div>

    <div class="row form">
        <div class="col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" placeholder="Nome" id="nome">  
        </div>
        <div class="col-md-6">
            <label for="data_de_nascimento">Data de nascimento</label>
            <input type="date" class="form-control" placeholder="__/__/____">  
        </div>
        <div class="col-md-12">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" placeholder="E-mail">  
        </div>
        <div class="col-md-12">
            <div id="buttonBuscar">
                <button type="button" class="btn btn-success">Cadastrar</button>
            </div>
        </div>
    </div>
</div>

<?php include_once("../includes/footer.php"); ?>