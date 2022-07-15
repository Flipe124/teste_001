<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">    
    <!--<link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/product.css">-->
    <title>WDEVEL</title>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #edebeb; margin-bottom: 50px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="../img/logoWdevel.png" margin-top="100px" width="150px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../user/index.php">Usuário</a></li>
            <li><a class="dropdown-item" href="../product/index.php">Produto</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../user/create.php">Usuário</a></li>
            <li><a class="dropdown-item" href="../product/create.php">Produto</a></li>
          </ul>
        </li>      
      </ul>
    </div>
  </div>
</nav>