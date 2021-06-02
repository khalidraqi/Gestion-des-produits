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

<div class="container">
    <div class="row my-5">
        <div class="col-md-12">
            <div class="row">
                <?php
                    if(count($products) > 0) :
                ?>
                <?php
                    foreach($products as $product) :
                ?>     
                <div class="col-md-4 md2 mt-4">
                    <div class="card h-100 bg-white rounded p-2">
                       <div class="card-header bg-light">
                          <div class="row justify-content-center">
                                <h3 class="card-title">
                                    <?php
                                    echo $product["product_title"]
                                    ?>
                                </h3>
                          </div>
                       </div>
                       <div class="card-img-top">
                            <img src="./public/uploads/<?php echo $product["product_image"];?>" alt="" class="img-fluid">
                        </div>
                         <div class="cart-body">
                           <div class="row justify-content-center">
                               <p class="cart-text">
                                  <?php
                                  echo $product["short_desc"]
                                  ?>
                              </p>
                          </div>
                       </div>

                       <div class="card-header bg-light">
                           <div class="row justify-content-center">
                             <span class="badge badge-success p-2">
                                 <?php
                                 echo $product["product_price"]
                                 ?> dh
                              </span>
                              <span class="badge badge-warning ml-3 p-2">
                                 <strike>
                                     <?php
                                     echo $product["old_price"]
                                     ?> dh
                                 </strike>
                             </span>
                           </div>
                       </div>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
                <?php
                    else :
                ?> 
                </div>
                <div class="row justify-content-center">
                  <div class=" alert alert-info">
                   aucun produit trouvé
                  </div>
                </div>
                <?php
                  endif ;
                ?>
            </div>
        </div>
    </div>
</div>
