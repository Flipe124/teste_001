<?php include_once("../includes/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 caixaConsulta">
            <div id="tituloConsultaCadastrar">
                <h3>Consultar</h3>
                <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'success') {
                            echo "Deletado com sucesso";
                        } else if (($_GET['msg'] == 'error')){
                            echo "Erro ao deletar";
                        }
                        
                    }
                    ?>
            </div>
            <form method="get">
                <div class="row ajuste">
                    <div class="col-md-12 ">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Digite aqui para pesquisar...">
                            <div class="input-group-pprend">
                                <a type="submit" id="btnPesquisar">PESQUISAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="titulo">
            <h3>Resultado</h3>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th class="w-10 p-3" scope="col">#ID</th>
                    <th class="w-10 p-3" scope="col">Nome</th>
                    <th class="w-10 p-3" scope="col">Descrição</th>
                    <th class="w- p-3" scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $search = isset($_GET["search"]) ? $_GET["search"] : "";

                $sql = "SELECT * FROM `user` WHERE  1 = 1";

                if ($search) {
                    $sql .= " AND `name` LIKE " . "'%" . $search . "%'";
                }

                $users = Database::connection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);;
                ?>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <th scope="row"><?php echo $user['id']; ?></th>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php if ($user["description"]) {
                                echo $user["description"];
                            } else {
                                echo "--";
                            } ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                </svg></a>
                            <a href="../process/user/delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once("../includes/footer.php"); ?>