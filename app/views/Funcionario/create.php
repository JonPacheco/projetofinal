<body>
<div class="container">
<h1>Cadastro de Funcionários</h1>
<hr>


<form action="<?php echo URL_BASE."funcionario/salvar" ?>"  method="POST">
   
    <div class="row">

        <div class="col">

            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Funcionário</label>

                <input type="text" class="form-control" required name="func" value="<?php echo isset($func) ? $func->func : null ?>"><br>

             </div>      

        </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Cargo</label>

            <input type="text" class="form-control" required name="cargo" value="<?php echo isset($func) ? $func->cargo : null ?>"><br>

        </div>

    </div>
    
    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Salario</label>

             <input type="text" class="form-control" required name="salario" value="<?php echo isset($func) ? $func->salario : null ?>"><br>

               

        </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Data Admissão</label>

             <input type="date" class="form-control" required name="dataadmissao" value="<?php echo isset($func) ? $func->dataadmissao : null ?>"><br>

             <input type="hidden"     name="idfunc"   value="<?php echo isset($func) ? $func->idfunc : null ?>">   
 

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

       <a href="<?php echo URL_BASE."Funcionario" ?>" class="btn btn-outline-primary">volta</a>

    </div>   


</body>
</html>