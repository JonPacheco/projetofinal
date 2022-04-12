<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
<div class="container">
<h1>Cadastro de Usuários</h1>
<hr>


<form action="<?php echo URL_BASE."usuario/salvar" ?>" method="POST">
   
    <div class="row">

        <div class="col">

            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Usuário</label>

                <input type="text" class="form-control" required name="nome"  value="<?php echo isset($user) ? $user->nome : null ?>"><br> 

             </div>      

    </div>
    
    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Email</label>

            <input type="email" class="form-control" required name="email" value="<?php echo isset($user) ? $user->email : null ?>"><br>

    </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Senha</label>

             <input type="text" class="form-control" required name="senha" value="<?php echo isset($user) ? $user->senha : null ?>"><br>  

        </div>

    </div>

    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">idSituação</label>

            <input type="text" class="form-control" required name="idsituacao" value="<?php echo isset($user) ? $user->idsituacao : null ?>"><br>

    </div>

    </div>

    <div class="row">

<div class="col">

<div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">idNivelAcesso</label>

    <input type="text" class="form-control" required name="idnivelacesso" value="<?php echo isset($user) ? $user->idnivelacesso : null ?>"><br>

</div>

</div>

<div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Criado</label>

            <input type="date" class="form-control" required name="criado" value="<?php echo isset($user) ? $user->criado : null ?>"><br>

    </div>

    </div>

    <div class="row">

<div class="col">

<div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Modificado</label>

    <input type="date" class="form-control" required name="modificado" value="<?php echo isset($user) ? $user->modificado : null ?>"><br>

    <input type="hidden"     name="idusuario"   value="<?php echo isset($user) ? $user->idusuario : null ?>"> 

</div>

</div>


    <div class="row">

      <div class="col">

        <div class="mb-3">        

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>


           


</form>  

    <div class="col">

      <div class="mb-3">

      <a href="<?php echo URL_BASE."usuario" ?>"  class="btn btn-outline-primary">volta</a>

    </div>

    
</body>
</html>