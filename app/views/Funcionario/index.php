<div class="container">
    
<h1>Listar Funcionários</h1>
<hr>
    <a href="<?php echo URL_BASE ?>" class="btn btn-dark">Menu</a>
<hr>
    <a href="<?php echo URL_BASE."Funcionario/create" ?>"  class="btn btn-primary">Novo Cadastro</a>
<hr>
<table class="table table-striped table-hover">
    <thead>
        <tr>
           <th>id</th> 
           <th>Funcionário</th>
           <th>Cargo</th>
           <th>Salário</th>
           <th>Data Admissão</th>
           <th colspan=2>Ações</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $func) { ?>
        <tr>
            <td><?php echo $func->idfunc ?></td>
            <td><?php echo $func->func ?></td>
            <td><?php echo $func->cargo ?></td>
            <td><?php echo $func->salario ?></td>
            <td><?php echo date ("d/m/Y", strtotime($func->dataadmissao)) ?></td>

            <td><a href="<?php echo URL_BASE."Funcionario/edit/".$func->idfunc ?>" class="btn btn-success">Editar</a></td>
            <td><a href="<?php echo URL_BASE."Funcionario/excluir/".$func->idfunc ?>" class="btn btn-danger">Excluir</a></td>

        </tr>
        <?php } ?>
    </tbody>
</table>



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
