<?php include_once("../includes/header.php"); ?>
<div class="container">
    <form method="POST" action="../../process/product/create.php" class="form">
        <div class="row">
            <div class="col-md-12 caixaConsulta">
                <div id="tituloConsultaCadastrar">
                    <h3>Cadastrar</h3>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'name') {
                            echo "Informe o nome";
                        } else if ($_GET['msg'] == 'error') {
                            echo "Produto não cadastrado";
                        } else if ($_GET['msg'] == 'success') {
                            echo "Produto cadastrado com sucesso";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="nome">Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome" id="nome">
            </div>
            <div class="col-md-6">
                <label for="description">Descrição</label>              
                <textarea class="form-control" name="description" rows="3" placeholder="Descreva o produto aqui..."></textarea>               
                <!--<input type="text" name="description" class="form-control" placeholder="Descreve o produto aqui...">-->
            </div>
            <div class="col-md-6" id="margin_cadastro">
                <button type="submit" class="btn btn-success">CADASTRAR</button>
            </div>
        </div>
    </form>
</div>

<?php include_once("../../includes/footer.php"); ?>