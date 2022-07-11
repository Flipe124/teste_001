<?php include_once("../includes/header.php"); ?>

<div class="container">
   
    <div class="row">
        <div class="col-md-12 caixaConsulta">
            <div id="tituloConsultaCadastrar">
                <h3>Consultar</h3>
            </div>
            <div class="input-group pesquisa">
            <input type="email" id="inputEmail" placeholder="E-mail">
            <div class="input-group-pprend">
                <button id="btnPesquisar">PESQUISAR</button>
            </div>
        </div>
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
        </tr>
    </thead>
  <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>02/09/2004</td>
            <td>mark@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>10/05/2000</td>
            <td>jacob@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry the Bird</td>
        <td>10/05/2000</td>
        <td>larry@twitter</td>
        </tr>
    </tbody>
</table>
    </div>
    <div id="scronllVertical"></div>
</div>

<?php include_once("../includes/footer.php"); ?>