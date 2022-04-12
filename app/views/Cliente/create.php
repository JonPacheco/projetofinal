<body>

<div class="container">
<h1>Cadastro de Clientes</h1>
<hr>


<form action="<?php echo URL_BASE."cliente/salvar" ?>" method="POST">
   
    <div class="row">

        <div class="col">

            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Cliente</label>

                <input type="text" class="form-control" required name="cliente"  value="<?php echo isset($cliente) ? $cliente->cliente : null ?>"><br> 

             </div>      

    </div>
    
    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Email</label>

            <input type="email" class="form-control" required name="email" value="<?php echo isset($cliente) ? $cliente->email : null ?>"><br>

    </div>
    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Telefone</label>

            <input type="tel" class="form-control" required name="tel" value="<?php echo isset($cliente) ? $cliente->tel : null ?>"><br>

    </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">CPF</label>

             <input type="text" class="form-control" required name="cpf" value="<?php echo isset($cliente) ? $cliente->cpf : null ?>"><br>

             <input type="hidden"     name="idcliente"   value="<?php echo isset($cliente) ? $cliente->idcliente : null ?>">   

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

      <a href="<?php echo URL_BASE."Cliente/"?>"  class="btn btn-outline-primary">volta</a>

    </div>

    
</body>
</html>