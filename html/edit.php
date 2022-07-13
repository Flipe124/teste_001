<?php include_once("../includes/header.php"); ?>
<?php include_once("../Database/Database.php"); ?>

<div class="container">
<form method="update" class="form">
        <div class="row">
            <div class="col-md-12 caixaConsulta">
                <div id="tituloConsultaCadastrar">
                    <h3>Editar</h3>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data Nasc</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Arrumar a cagada...
                        if(!empty($_GET['id'])){

                        $sql = "SELECT * FROM `user` WHERE  id=$id";

                        $users = Database::connection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                        }
                        ?>
                        <tr>                         
                            <th scope="row">1</th>
                            <td><?php echo $user['name'];?></td>
                            <td><?php echo date("d/m/Y", strtotime(($user['date_of_birth'])));?></td>
                            <td><?php if($user["email"]){echo $user["email"];}else{echo "--";}?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="col-md-5">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" id="nome">  
            </div>
            <div class="col-md-2">
                <label for="data_de_nascimento">Data de nascimento</label>
                <input type="date" class="form-control" placeholder="__/__/____">  
            </div>
            <div class="col-md-5">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" placeholder="E-mail">  
            </div>
            <div class="col-md-2">
                <div>
                    <a href="index.php">
                        <button type="button" id="btnVoltar">VOLTAR</button>
                    </a>
                </div>
            </div>
            <div class="col-md-8"></div>
            <div class="col-md-2">
                <div>
                    <button type="button"  id="btnSalvar">SALVAR</button>
                </div>
            </div>
            
        </div>
    </form>
</div>

<?php include_once("../includes/footer.php"); ?>