<?php include_once("../includes/header.php"); ?>
<?php include_once("../Database/Database.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 caixaConsulta">
            <div id="tituloConsultaCadastrar">
                <h3>Consultar</h3>
            </div>
            <form method="get">                          
                <div class="row ajuste">                  
                    <div class="col-md-12 ">                
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Digite aqui para pesquisar...">
                            <div class="input-group-pprend">
                                <button type="submit" id="btnPesquisar">PESQUISAR</button>
                            </div>
                        </div>
                    </div>
                </div>            
            </form>
        </div>
        <div id="titulo">
            <h3>Resultado</h3>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Nasc</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php

            $search = isset($_GET["search"]) ? $_GET["search"] : "";

            $sql = "SELECT * FROM `user` WHERE  1 = 1";

            if($search) {
                $sql .= " AND `name` LIKE " . "'%" . $search . "%'";
            }

            $users = Database::connection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);;
            ?>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime(($user['date_of_birth']))); ?></td>
                    <td><?php if($user["email"]){echo $user["email"];}else{echo "--";}?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $user['id'];?>" class="btn btn-primary">EDITAR</a>
                        <a href="edit.php?id=<?php echo $user['id'];?>" class="btn btn-danger">EXCLUIR</a>
                    </td>
                </tr>               
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once("../includes/footer.php"); ?>