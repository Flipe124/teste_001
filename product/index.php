<!-- MODIFICANDO-->
<?php include_once("../includes/header.php");?>
<?php include_once("../Database/Database.php");?>
<div class="container">
    <div class="row row_color">
        <div class="col-md-12 query_box">
            <div class="titulo_centro">
                <h3>CONSULTAR</h3>
                <p class="opacity-50 align-middle">PRODUTO</p>
                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == 'success') {
                        echo "<p class=text-success>Produto deletado com sucesso</p>";
                    } else if (($_GET['msg'] == 'error')) {
                        echo "<p class=text-danger>Produto não deletado</p>";
                    }
                }
                ?>
            </div>
            <form method="get">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Digite aqui para pesquisar...">
                            <div class="input-group-pprend"><button type="submit" class="btn btn-ligh" id="margin_pesquisar">PESQUISAR</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12 titulo_centro"><h4>RESULTADO</h4></div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="w-5 p-3" scope="col">#ID</th>
                    <th class="w-25 p-3" scope="col">Nome</th>
                    <th class="w-70 p-3" scope="col">Descrição</th>
                    <th class="w-5 p-3" scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $search = isset($_GET["search"]) ? $_GET["search"] : "";

                $sql = "SELECT * FROM `product` WHERE  1 = 1";

                if ($search) {
                    $sql .= " AND `name` LIKE " . "'%" . $search . "%'";
                }

                $products = Database::connection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);;
                ?>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <th scope="row"><?php echo $product['id']; ?></th>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php if ($product["description"]) {
                                echo $product["description"];
                            } else {
                                echo "--";
                            }
                            ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                            </a>
                            <a href="../process/product/delete.php?id=<?php echo $product['id']; ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once("../includes/footer.php");?>