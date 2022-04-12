<body>
<div class="container">
    
<h1>Listar Usuários</h1>
<hr>
    <a href="<?php echo URL_BASE ?>" class="btn btn-dark">Menu</a>
<hr>
    <a href="<?php echo URL_BASE."Usuario/create"?>" class="btn btn-primary">Novo Cadastro</a>
<hr>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
           <th>idUsuário</th> 
           <th>Nome</th>
           <th>Email</th>
           <th>Senha</th>
           <th>idSituação</th>
           <th>idNivelAcesso</th>
           <th>Criado</th>
           <th>Modificado</th>
           <th colspan=2>Ações</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $user) { ?>
        <tr>
            <td><?php echo $user->idusuario ?></td>
            <td><?php echo $user->nome ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->senha ?></td>
            <td><?php echo $user->idsituacao ?></td>
            <td><?php echo $user->idnivelacesso ?></td>
            <td><?php echo date ("d/m/Y", strtotime($user->criado)) ?></td>
            <td><?php echo date ("d/m/Y", strtotime($user->modificado)) ?></td>
            <td><a href="<?php echo URL_BASE."Usuario/edit/".$user->idusuario ?>" class="btn btn-success">Editar</a></td>
            <td><a href="<?php echo URL_BASE."Usuario/excluir/".$user->idusuario ?>" class="btn btn-danger">Excluir</a></td>

        </tr>
        <?php } ?>
    </tbody>
</table>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

