<?php include_once("../includes/header.php");?>
<?php include_once("../Database/Database.php");?>
<div class="container">
    <form action="../process/product/update.php" method="post">
        <div class="row row_color">
            <div class="col-md-12 create_box">
                <div class="titulo_centro">
                    <h3>EDITAR</h3>
                    <p class="fs-5">PRODUTO</p>
                    <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == 'name') {
                        echo "<p class=text-danger>Informe o nome</p>";
                    } else if ($_GET['msg'] == 'error') {
                        echo "<p class=text-danger>Produto não alterado com sucesso</p>";
                    } else if ($_GET['msg'] == 'success') {
                        echo "<p class=text-success>Produto alterado com sucesso</p>";
                    } 
                }
                ?>
                </div>
            </div>
            <?php
    $id = isset($_GET["id"]) ? $_GET["id"] : NULL;

    if (!$id) { ?>
            <div>
                <p class="text-danger">Produto não encontrado :/</p>
                <a href="index.php" class="btn btn-primary">VOLTAR</a>
            </div>
            <?php } else { ?>
            <?php $sql = "SELECT * FROM `product` WHERE `id` = $id";
        $product = Database::connection()->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (!$product) { ?>
            <div>
                <p class="text-danger">Produto não encontrado :/</p>
                <a href="index.php" class="btn btn-primary">VOLTAR</a>
            </div>
            <?php } else { ?>

            <input type="hidden" name="id" class="form-control" value="<?php echo $product['id']; ?>">
            <div class="col-md-6">
                <label for="name">Nome</label>
                <label class="text-danger">*</label>
                <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" id="name">
            </div>
            <div class="col-md-6">
                <label for="description">Descrição</label>
                <textarea class="form-control" name="description"
                    rows="3"><?php echo $product["description"];?></textarea>
            </div>
            <div class="col-md-12 text-danger">* Campos obrigatórios.</div>
            <div class="col-md-6 button_margin_top"><a href="index.php" type="button" class="btn btn-primary">VOLTAR</a>
            </div>
            <div class="col-md-6 button_margin_top" id=""><button type="submit" class="btn btn-success">SALVAR</button></div>
    </form>
    <?php } ?>
    <?php } ?>
</div>
</div>
<?php include_once("../includes/footer.php");?>