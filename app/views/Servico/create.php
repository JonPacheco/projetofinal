<body>
<div class="container">
<h1>Serviços</h1>
<hr>


<form action="<?php echo URL_BASE."servico/salvar" ?>" method="POST">
   
    <div class="row">

        <div class="col">

            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Serviços</label>

                <input type="text" class="form-control" required name="serv" value="<?php echo isset($serv) ? $serv->serv : null ?>"><br>

             </div>      

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Valor Hora</label>

            <input type="text" class="form-control" required name="valorhr" value="<?php echo isset($serv) ? $serv->valorhr : null ?>"><br>

        </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Uso Hora</label>

             <input type="text" class="form-control" required name="usohr" value="<?php echo isset($serv) ? $serv->usohr : null ?>"><br>

             <input type="hidden"     name="idserv"   value="<?php echo isset($serv) ? $serv->idserv : null ?>">      

    </div>

    </div>

    <div class="row">

      <div class="col">

         <div class="mb-3">        

         <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>   



</form>    
    <div class="row">

      <div class="col">

         <div class="mb-3">        

         <a href="<?php echo URL_BASE."servico"?>" class="btn btn-outline-primary">volta</a>

    </div>
    



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

