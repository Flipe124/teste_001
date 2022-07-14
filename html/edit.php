<?php include_once("../includes/header.php"); ?>
<?php include_once("../Database/Database.php"); ?>

<div class="container">
    <div id="tituloConsultaCadastrar">
        <h3>Editar</h3>
        <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'name') {
                    echo "Informe o nome";
                } else if ($_GET['msg'] == 'date_of_birth') {
                    echo "Informe a data de nascimento";
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
            <p>Usuário não encontrado :/</p>
            <a href="index.php" id="btnVoltar">VOLTAR</a>
        </div>
    <?php } else { ?>
        <?php $sql = "SELECT * FROM `user` WHERE `id` = $id";
        $user = Database::connection()->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (!$user) { ?>
            <div>
                <p>Usuário não encontrado :/</p>
                <a href="index.php" id="btnVoltar">VOLTAR</a>
            </div>
        <?php } else { ?>
            <form action="../process/user/update.php" method="post">
                <div class="row">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $user['id']; ?>">
                    <div class="col-md-5">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $user['name']; ?>" id="name">
                    </div>
                    <div class="col-md-2">
                        <label for="date_of_birth">Data de nascimento</label>
                        <input type="date" name="date_of_birth" class="form-control" value="<?php echo $user['date_of_birth']; ?>" id="date_of_birth">
                    </div>
                    <div class="col-md-5">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $user["email"]; ?>" id="email">
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

<?php include_once("../includes/footer.php"); ?>