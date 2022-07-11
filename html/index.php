<?php include_once("../includes/header.php"); ?>

<div class="container">
   
    <div class="row">
        <div class="col-md-12 caixaConsulta">
            <div id="titulo">
                <h3>CONSULTAR</h3>
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

        <div id="resultadoConsulta">               
            <div>
                <ul>
                    <li>Nome - </li>
                    <li>E-mail - </li>
                    <li>Data Nascimento - </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="scronllVertical"></div>
</div>

<?php include_once("../includes/footer.php"); ?>