<?php include_once("../includes/header.php"); ?>
<div class="container">
    <form method="POST" action="../process/product/create.php" class="form">
        <div class="row row_color">
            <div class="col-md-12 create_box">
                <div class="titulo_centro">
                    <h3>CADASTRAR</h3>
                    <p class="opacity-50">PRODUTO</p>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'name') {
                            echo "<p class=text-warning>Informe o nome</p>";
                        } else if ($_GET['msg'] == 'error') {
                            echo "<p class=text-danger>Produto não encontrado</p>";
                        } else if ($_GET['msg'] == 'success') {
                            echo "<p class=text-success>Produto cadastrado com sucesso</p>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="nome">Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <label for="description">Descrição</label>              
                <textarea class="form-control" name="description" rows="3" placeholder="Descreva o produto aqui..."></textarea>               
            </div>
            <div class="col-md-6" id="margin_cadastro"><button type="submit" class="btn btn-success">CADASTRAR</button></div>
        </div>
    </form>
</div>

<?php include_once("../includes/footer.php");?>