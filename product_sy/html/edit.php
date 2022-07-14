<?php include_once("../includes/header.php"); ?>
<?php include_once("../../Database/Database.php"); ?>

<div class="container">
    <div id="tituloConsultaCadastrar">
        <h3>Editar</h3>
        <?php // MODIFICAR!
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'name') {
                    echo "Informe o nome";
                } else if ($_GET['msg'] == 'error') {
                    echo "Usuário não alterado";
                } else if ($_GET['msg'] == 'success') {
                    echo "Usuário alterado com sucesso";
                } 
            }
            ?>
    </div>
    <?php
    $id = isset($_GET["id"]) ? $_GET["id"] : NULL;

    if (!$id) { ?>
        <div>
            <p>Produto não encontrado :/</p>
            <a href="index.php" id="btnVoltar">VOLTAR</a>
        </div>
    <?php } else { ?>
        <?php $sql = "SELECT * FROM `product` WHERE `id` = $id";
        $product = Database::connection()->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (!$product) { ?>
            <div>
                <p>Produto não encontrado :/</p>
                <a href="index.php" id="btnVoltar">VOLTAR</a>
            </div>
        <?php } else { ?>
            <form action="../../process/product/update.php" method="post">
                <div class="row">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $product['id']; ?>">
                    <div class="col-md-5">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" id="name">
                    </div>
                    <div class="col-md-5">
                        <label for="email">Descrição</label>
                        <textarea class="form-control" name="description" rows="3"><?php echo $product["description"]; ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <a href="index.php" type="button" id="btnVoltar">VOLTAR</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" id="btnSalvar">SALVAR</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    <?php } ?>
</div>

<?php include_once("../../includes/footer.php"); ?>