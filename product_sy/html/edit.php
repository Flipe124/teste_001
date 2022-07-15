<?php include_once("../includes/header.php"); ?>
<?php include_once("../../Database/Database.php"); ?>
<div class="container">
    <form action="../../process/product/update.php" method="post">
        <div class="row row_color">
            <div class="col-md-12 query_box">
                <div class="titulo_centro">
                    <h3>Editar</h3>
                    <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == 'name') {
                        echo "Informe o nome";
                    } else if ($_GET['msg'] == 'error') {
                        echo "Produto não alterado com sucesso";
                    } else if ($_GET['msg'] == 'success') {
                        echo "Produto alterado com sucesso";
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
                <a href="index.php" class="btn btn-success">VOLTAR</a>
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
                <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" id="name">
            </div>
            <div class="col-md-6">
                <label for="description">Descrição</label>
                <textarea class="form-control" name="description"
                    rows="3"><?php echo $product["description"];?></textarea>
            </div>
            <div class="col-md-6 button_margin_top"><a href="index.php" type="button" class="btn btn-primary">VOLTAR</a>
            </div>
            <div class="col-md-6 button_margin_top" id=""><button type="submit" class="btn btn-success">SALVAR</button></div>
    </form>
    <?php } ?>
    <?php } ?>
</div>
</div>
<?php include_once("../../includes/footer.php"); ?>