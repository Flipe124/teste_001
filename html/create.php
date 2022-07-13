<?php include_once("../includes/header.php"); ?>

<div class="container">
    <form method="post" class="form">
        <div class="row">
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
            <div class="col-md-6">
                <div>
                    <a href="index.php" type="button" id="btnVoltar">VOLTAR</a>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <a type="button"  id="btnCadastrar">CADASTRAR</a>
                </div>
            </div>

        </div>
    </form>
</div>

<?php include_once("../includes/footer.php"); ?>