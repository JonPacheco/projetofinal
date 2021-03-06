<div class="container">

<h1>Listar Produtos</h1>
<hr>
    <a href="<?php echo URL_BASE ?>"  class="btn btn-dark">Menu</a>
<hr>
    <a href="<?php echo URL_BASE."produto/create" ?>"  class="btn btn-primary">Novo Cadastro</a>
<hr>
<table class="table table-striped table-hover">
    <thead>
        <tr>
           <th>id</th> 
           <th>Produto</th>
           <th>Preço Hora</th>
           <th>Uso Hora</th>          
           <th colspan=2>Ações</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $produto) { ?>
        <tr>
            <td><?php echo $produto->idproduto ?></td>
            <td><?php echo $produto->produto ?></td>
            <td><?php echo $produto->precohr ?></td>
            <td><?php echo $produto->usohr ?></td>            

            <td><a href="<?php echo URL_BASE."produto/edit/".$produto->idproduto ?>" class="btn btn-success">Editar</a></td>
            <td><a href="<?php echo URL_BASE."produto/excluir/".$produto->idproduto ?>"class="btn btn-danger">Excluir</a></td>

        </tr>
        <?php } ?>
    </tbody>
</table>
<script>
  
  $('.component_slider-76144').owlCarousel({
    items:1,
    autoHeight:true,
		loop:true,
		dots: false,
		margin:0,
		nav:true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause:true,
		navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
	})
</script>

</div><div id='component-76145'>
<div id="featured-products-76145" class="container">
  <!-- Products Section -->
  <div class="row">
    <div class="col-12">
      <h2 class="page-header">Lista de Produtos</h2>
    </div>

   <!-- Featured Products -->
    
   <div class="col-md-3 col-6 product-block">
      
      <a href="/wacom-tablet"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1614272621" srcset="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1614272621 1x, https://cdnx.jumpseller.com/bootstrap/image/429444/resize/510/640?1614272621 2x" alt="Wacom Bamboo Tablet" /></a>
      
      <div class="caption">
        <h3><a href="/wacom-tablet">Wacom Bamboo Tablet</a></h3>
        <div class="price-mob mb-2">
          
          
          $100.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/smartphone-mtk6572"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548" srcset="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548 1x, https://cdnx.jumpseller.com/bootstrap/image/429445/resize/510/640?1439529548 2x" alt="Smartphone MTK6572 " /></a>
      
      <div class="caption">
        <h3><a href="/smartphone-mtk6572">Smartphone MTK6572 </a></h3>
        <div class="price-mob mb-2">
          
          
          $500.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/imac-desktop-computer"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839" srcset="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839 1x, https://cdnx.jumpseller.com/bootstrap/image/429446/resize/510/640?1439529839 2x" alt="iMac Desktop Computer" /></a>
      
      <div class="caption">
        <h3><a href="/imac-desktop-computer">iMac Desktop Computer</a></h3>
        <div class="price-mob mb-2">
          
          
          $1.200.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/ps4"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709" srcset="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709 1x, https://cdnx.jumpseller.com/bootstrap/image/429450/resize/510/640?1439530709 2x" alt="DualShock Controller for PlayStation 4" /></a>
      
      <div class="caption">
        <h3><a href="/ps4">DualShock Controller for PlayStation 4</a></h3>
        <div class="price-mob mb-2">
          
          
          $20.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          
        </div><!-- /.row -->
      </div>
      
      </div><div id='component-76146'>
      <div id="latest-products-76146" class="container">
        <!-- Products Section -->
        <div class="row">
          <div class="col-12">
            <h2 class="page-header">New Arrivals</h2>
          </div>
      
          
          <!-- Latest Products -->
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/camara-nikon-reflex-d7200-lente-18-140"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/255/320?1564681025" srcset="https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/255/320?1564681025 1x, https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/510/640?1564681025 2x" alt="Camara Nikon Reflex D7200 + Lente 18-140" /></a>
      
      <div class="caption">
        <h3><a href="/camara-nikon-reflex-d7200-lente-18-140">Camara Nikon Reflex D7200 + Lente 18-140</a></h3>
        <div class="price-mob mb-2">
          
          
          $1.290.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/notebook-asus-x507ua-intel-core-i3-4gb-ram"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/255/320?1564681003" srcset="https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/255/320?1564681003 1x, https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/510/640?1564681003 2x" alt="Notebook Asus X507UA Intel Core i3 4GB RAM " /></a>
      
      <div class="caption">
        <h3><a href="/notebook-asus-x507ua-intel-core-i3-4gb-ram">Notebook Asus X507UA Intel Core i3 4GB RAM </a></h3>
        <div class="price-mob mb-2">
          
          
          $900.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/dualshock-controller-for-playstation-4"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/255/320?1439530880" srcset="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/255/320?1439530880 1x, https://cdnx.jumpseller.com/bootstrap/image/429451/resize/510/640?1439530880 2x" alt="Dualshock Controller for PlayStation 4" /></a>
      
      <div class="caption">
        <h3><a href="/dualshock-controller-for-playstation-4">Dualshock Controller for PlayStation 4</a></h3>
        <div class="price-mob mb-2">
          
          <span class="product-block-not-available">Out of Stock</span>
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/keyboarded-tablet"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429448/resize/255/320?1439530289" srcset="https://cdnx.jumpseller.com/bootstrap/image/429448/resize/255/320?1439530289 1x, https://cdnx.jumpseller.com/bootstrap/image/429448/resize/510/640?1439530289 2x" alt="Asus Transformer Pad Tablet" /></a>
      
      <div class="caption">
        <h3><a href="/keyboarded-tablet">Asus Transformer Pad Tablet</a></h3>
        <div class="price-mob mb-2">
          
          
          $200.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/ps4"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709" srcset="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709 1x, https://cdnx.jumpseller.com/bootstrap/image/429450/resize/510/640?1439530709 2x" alt="DualShock Controller for PlayStation 4" /></a>
      
      <div class="caption">
        <h3><a href="/ps4">DualShock Controller for PlayStation 4</a></h3>
        <div class="price-mob mb-2">
          
          
          $20.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/imac-desktop-computer"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839" srcset="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839 1x, https://cdnx.jumpseller.com/bootstrap/image/429446/resize/510/640?1439529839 2x" alt="iMac Desktop Computer" /></a>
      
      <div class="caption">
        <h3><a href="/imac-desktop-computer">iMac Desktop Computer</a></h3>
        <div class="price-mob mb-2">
          
          
          $1.200.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/smartphone-mtk6572"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548" srcset="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548 1x, https://cdnx.jumpseller.com/bootstrap/image/429445/resize/510/640?1439529548 2x" alt="Smartphone MTK6572 " /></a>
      
      <div class="caption">
        <h3><a href="/smartphone-mtk6572">Smartphone MTK6572 </a></h3>
        <div class="price-mob mb-2">
          
          
          $500.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          <div class="col-md-3 col-6 product-block">
            
      <a href="/wacom-tablet"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1614272621" srcset="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1614272621 1x, https://cdnx.jumpseller.com/bootstrap/image/429444/resize/510/640?1614272621 2x" alt="Wacom Bamboo Tablet" /></a>
      
      <div class="caption">
        <h3><a href="/wacom-tablet">Wacom Bamboo Tablet</a></h3>
        <div class="price-mob mb-2">
          
          
          $100.000
          
          
        </div>
        <div class="clearfix"></div>
      
        
      
      </div>
      
          </div>
          
          
        </div><!-- /.row -->
      </div>
      
      </div><div id='component-77796'>
      <div id="latest-posts-77796" class="container">
      
        <div class="blog_list row mb-md-5 mb-4 mx-n2 justify-content-center">
          
          <div class="col-12">
            <h2 class="page-header">Blog</h2>
          </div>
          
      
          
          <div class="col-md-4 mb-4">
            <a href="https://bootstrap.jumpseller.com/samsung-smartphones" title="Samsung Smartphones">
              <div class="card shadow-sm">
                
                <img class="img-fluid" src="https://cdnx.jumpseller.com/bootstrap/image/937252/thumb/550/280?1479219826" srcset="https://cdnx.jumpseller.com/bootstrap/image/937252/thumb/550/280?1479219826 1x,https://cdnx.jumpseller.com/bootstrap/image/937252/thumb/1100/560?1479219826 2x" alt="Samsung Smartphones" />
                
      
                <div class="card-body">
                  <h6>Samsung Smartphones</h6>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-4 mb-4">
            <a href="https://bootstrap.jumpseller.com/dualshock-4" title="The brand new Dualshock 4">
              <div class="card shadow-sm">
                
                <img class="img-fluid" src="https://cdnx.jumpseller.com/bootstrap/image/937208/thumb/550/280?1479218165" srcset="https://cdnx.jumpseller.com/bootstrap/image/937208/thumb/550/280?1479218165 1x,https://cdnx.jumpseller.com/bootstrap/image/937208/thumb/1100/560?1479218165 2x" alt="The brand new Dualshock 4" />
                
      
                <div class="card-body">
                  <h6>The brand new Dualshock 4</h6>
                </div>
              </div>
            </a>
          </div>
          
      
          <div class="col-12 text-center px-2">
            <a href="https://bootstrap.jumpseller.com/blog" title="Blog" class="btn btn-primary mt-3">Go to Blog</a>
          </div>
      
        </div>
      
      </div>
      
      </div></div>
      


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
