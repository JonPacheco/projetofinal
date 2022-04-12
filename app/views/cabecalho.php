<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  
<!-- Inicio da Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
         
          <a class="navbar-brand" href="<?php echo URL_BASE ?>">JPS Technology
          
     
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE."Produto" ?>">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE."Servico" ?>">Serviços</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE."Cliente"?>">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE."Funcionario"?>">Funcionário</a>
            </li> 
            <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE."Venda"?>">Vendas</a>
              </li>  -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE."Usuario"?>">Usúarios</a>
              </li>  -->
             

             <!--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastrar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="frmclientes.php">Clientes</a></li>
                  <li><a class="dropdown-item" href="produtos.php">Produtos</a></li>
                  <li><a class="dropdown-item" href="vendas.php">Vendas</a></li>
                  <li><a class="dropdown-item" href="vendedores.php">Vendedores</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>
              </li>
              -->
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            </ul>

            <form class="d-flex">
              <a href="<?php echo URL_BASE."Login/login"?>" class="btn btn-outline-success">Login</a>
            </form>

           <!--<form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form> -->
          </div>
        </div>
      </nav>
<!-- Fim do Navbar-->