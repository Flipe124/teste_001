<?php include_once("../includes/header.php"); ?>
<div class="container">
    <form method="POST" action="../process/user/create.php" class="form">
        <div class="row">
            <div class="col-md-12 caixaConsulta">
                <div id="tituloConsultaCadastrar">
                    <h3>Cadastrar</h3>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'name') {
                            echo "Informe o nome";
                        } else if ($_GET['msg'] == 'date_of_birth') {
                            echo "Informe a data de nascimento";
                        } else if ($_GET['msg'] == 'error') {
                            echo "Usuário não cadastrado";
                        } else if ($_GET['msg'] == 'success') {
                            echo "Usuário cadastrado com sucesso";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-5">
                <label for="nome">Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome" id="nome">
            </div>
            <div class="col-md-2">
                <label for="data_de_nascimento">Data de nascimento</label>
                <input type="date" name="date_of_birth" class="form-control" placeholder="__/__/____">
            </div>
            <div class="col-md-5">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="col-md-6">
                <button type="submit" id="btnCadastrar">CADASTRAR</button>
            </div>
        </div>
    </form>
</div>

<?php include_once("../includes/footer.php"); ?>