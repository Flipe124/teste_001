<?php include_once("../includes/header.php");?>
<?php include_once("../Database/Database.php");?>
<?php
    // SQL para Seleciona os registros
    //$result_msg_cont = "SELECT * FROM user WHERE id=1";
    // Seleciona os registros
   // $resultado_msg_cont = $conection->prepare($result_msg_cont);
   // $resultado_msg_cont->execute();
    //$resultado_msg_cont->fetch(PDO::FETCH_ASSOC);
?>


<div class="container">
    <form method="update" class="form">
        <div class="row">
            <div class="col-md-12 caixaConsulta">
                <div id="tituloConsultaCadastrar">
                    <h3>Editar</h3>
                </div>
            </div>
            <div class="col-md-12">
                <?php
                $id = isset($_GET["id"]) ? $_GET["id"] : NULL;

                if (!$id) { ?>
                    <div>
                        <p>Usuário não encontrado :/</p>
                        <a href="index.php" id="btnVoltar">VOLTAR</a>
                    </div>
                <?php } else { ?>

                    <?php $sql = "SELECT * FROM `user` WHERE  id=$id";

                    $user = Database::connection()->query($sql)->fetch(PDO::FETCH_ASSOC);
                    if (!$user) { ?>

                        <div>
                            <p>Usuário não encontrado :/</p>
                            <a href="index.php" id="btnVoltar">VOLTAR</a>
                        </div>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-md-5">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control"value="<?php echo $user['name']; ?>" id="nome">
                            </div>
                            <div class="col-md-2">
                                <label for="data_de_nascimento">Data de nascimento</label>
                                <!-- Gambiarra aqui embaixo type"date"-->
                                <input type="" class="form-control" value="<?php echo date("d/m/Y", strtotime(($user['date_of_birth']))); ?>">
                            </div>
                            <div class="col-md-5">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" value="<?php if ($user["email"]) {echo $user["email"];} else {echo "--";} ?>">
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <a href="index.php" type="button" id="btnVoltar">VOLTAR</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a name="SendEditCont" type="submit" id="btnSalvar">SALVAR</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
    </form>
</div>

<?php include_once("../includes/footer.php"); ?>