<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo BASE_URL;?>">Web Produits</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent"style="margin-left: 45rem;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASE_URL;?>">Accueil <span class="sr-only" >(current)</span></a>
      </li>
        <?php
          $categories = new CategoriesController();
          $categories = $categories->getAllCategories();
          if(isset($_POST["cat_id"])){
          $products = new ProductsController();
          $products = $products->getProductsByCategory($_POST['cat_id']);
          }else{
          $data = new ProductsController();
          $products = $data->getAllProducts();
          }
        ?>
   <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catègories
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              foreach($categories as $category) :
              ?>
           <ul class="dropdown-item">
                <li class="dropdown-item">
                  <form id="catPro" method="post" action="<?php echo BASE_URL;?>">
                    <input type="hidden" name="cat_id" id="cat_id">
                  </form>
                  <a onclick="getCatProducts(<?php echo $category['cat_id'];?>)" class="btn btn-link text-secondary">     
                    <?php
                    echo $category["cat_title"]
                    ?> 

                    (<?php
                    $productsByCat = new ProductsController();
                    $productsByCat = $productsByCat->getProductsByCategory($category['cat_id']);
                    echo count($productsByCat);
                    ?>)
                  </a>
              </li>
            </ul>
            <?php
              endforeach;
            ?>
       </div>
    </div>
      <div>
          <div style="margin-left: 34rem;">
          <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
          <a class="btn btn-success ml-4" href="<?php echo BASE_URL;?>dashboard"> dashboard <span class="sr-only">(current)</span></a>
          <a class="btn btn-danger ml-4" href="<?php echo BASE_URL;?>logout">Déconnexion</a>
          <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true):?>
          <?php endif;?> 
          <?php else:?> 
          </div>
          
          <div style="margin-left: 42rem;">
          <a class="btn btn-success ml-4" href="<?php echo BASE_URL;?>login">Connexion</a>
          </div> 
         <?php endif;?> 
      </div>
    </ul>
  </div>
</nav>