<?php include_once("../includes/header.php"); ?>
<div class="container">
    <form method="POST" action="../process/user/create.php" class="form">
        <div class="row row_color">
            <div class="col-md-12 create_box">
                <div class="titulo_centro">
                    <h3>CADASTRAR</h3>
                    <p class="fs-5">USUÁRIO</p>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'name') {
                            echo "<p class=text-danger>Informe o nome</p>";
                        } else if ($_GET['msg'] == 'date_of_birth') {
                            echo "<p class=text-danger>Informe a data de nascimento</p>";
                        } else if ($_GET['msg'] == 'error') {
                            echo "<p class=text-danger>Usuário não encontrado</p>";
                        } else if ($_GET['msg'] == 'success') {
                            echo "<p class=text-success>Usuário cadastrado com sucesso</p>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-5">
                <label for="nome">Nome</label>
                <label class="text-danger">*</label>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
            <div class="col-md-2">
                <label for="data_de_nascimento">Data de nascimento</label>
                <label class="text-danger">*</label>
                <input type="date" name="date_of_birth" class="form-control" placeholder="__/__/____">
            </div>
            <div class="col-md-5">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="col-md-6 text-danger">* Campos obrigatórios.</div>
            <div class="col-md-6" id="margin_cadastro"><button type="submit" class="btn btn-success">CADASTRAR</button></div>
        </div>
    </form>
</div>

<?php include_once("../includes/footer.php"); ?>