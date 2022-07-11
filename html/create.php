<?php include_once("../includes/header.php"); ?>

<div class="container">
    <div class="row form">
        <div class="col-md-12 caixaConsulta">
            <div id="tituloConsultaCadastrar">
                <h3>Cadastrar</h3>
            </div>
        </div>

        <div class="col-md-5">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" placeholder="Nome" id="nome">  
        </div>
        <div class="col-md-2">
            <label for="data_de_nascimento">Data de nascimento</label>
            <input type="date" class="form-control" placeholder="__/__/____">  
        </div>
        <div class="col-md-5">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" placeholder="E-mail">  
        </div>
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <div>
                <button type="button"  id="btnCadastrar">Cadastrar</button>
            </div>
        </div>

    </div>
</div>

<?php include_once("../includes/footer.php"); ?>