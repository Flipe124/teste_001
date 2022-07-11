<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <title>WDevel</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <div id="logo">
                <img src="../img/logoWdevel.png" margin-top="100px" width="150px" alt="">
            </div>
        </div>   
        <div class="col">
            <div id="botaoNavBar" class="col">
                <a href="index.php">
                    <button type="button" class="btn btn-ligh">Consultar</button>
                </a>
                <a href="create.php">
                    <button type="button" class="btn btn-ligh">Cadastrar</button>
                </a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div id="titulo">
                <h3>Consultar</h3>
            </div>

            <div class="input-group" id="ConsultarCliente">
                <div class="marign10">
                    <p>Insira o Email:</p>
                </div>
                <span class="input-group-text">exemplo@gmail.com</span>
                <input type="email" class="form-control" placeholder="E-mail">  
            </div>

            <div id="buttonBuscar">
                <button type="button" class="btn btn-success">Buscar</button>
            </div>

            <div class="col">
                
                <div>
                    
                </div>
            </div>
            <div class="col">
                
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

    </div>


   

<script src="../lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>