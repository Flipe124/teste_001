<?php include_once("../includes/header.php"); ?>
<?php include_once("../Database/Database.php"); ?>

<div class="container">
    <form action="../process/user/update.php" method="post">
        <div class="row row_color">
            <div class="col-md-12 create_box">
                <div class="titulo_centro">
                    <h3>EDITAR</h3>
                    <p class="fs-5">USUÁRIO</p>
                    <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'name') {
                    echo "<p class=text-danger>Informe o nome</p>";
                } else if ($_GET['msg'] == 'date_of_birth') {
                    echo "<p class=text-danger>Informe a data de nascimento</p>";
                } else if ($_GET['msg'] == 'error') {
                    echo "<p class=text-danger>Usuário não alterado com sucesso</p>";
                } else if ($_GET['msg'] == 'success') {
                    echo "<p class=text-success>Usuário alterado com sucesso</p>";
                } 
            }
            ?>
                </div>
            </div>
            <?php
    $id = isset($_GET["id"]) ? $_GET["id"] : NULL;

    if (!$id) { ?>
            <div>
                <p class="text-danger">Usuário não encontrado :/</p>
                <a href="../user/index.php" class="btn btn-primary">VOLTAR</a>
            </div>
            <?php } else { ?>
            <?php $sql = "SELECT * FROM `user` WHERE `id` = $id";
        $user = Database::connection()->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (!$user) { ?>
            <div>
                <p class="text-danger">Usuário não encontrado :/</p>
                <a href="../user/index.php" class="btn btn-primary">VOLTAR</a>
            </div>
            <?php } else { ?>

            <input type="hidden" name="id" class="form-control" value="<?php echo $user['id']; ?>">
            <div class="col-md-5">
                <label for="name">Nome</label>
                <label class="text-danger">*</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user['name']; ?>" id="name">
            </div>
            <div class="col-md-2">
                <label for="date_of_birth">Data de nascimento</label>
                <label class="text-danger">*</label>
                <input type="date" name="date_of_birth" class="form-control"
                    value="<?php echo $user['date_of_birth']; ?>" id="date_of_birth">
            </div>
            <div class="col-md-5">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user["email"]; ?>" id="email">
            </div>
            <div class="col-md-12 text-danger">* Campos obrigatórios.</div>
            <div class="col-md-6 button_margin_top">
                <a href="index.php" type="button" class="btn btn-primary">VOLTAR</a>
            </div>
            <div class="col-md-6 button_margin_top"><button type="submit" class="btn btn-success">SALVAR</button></div>          
        </div>
    </form>
    <?php } ?>
    <?php } ?>
</div>

<?php include_once("../includes/footer.php"); ?>