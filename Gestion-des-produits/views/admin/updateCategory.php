<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
        
        $categoriesToUpdate = new CategoriesController();
        $categoriesToUpdate = $categoriesToUpdate->getCategory();
        if(isset($_POST["submit"])){
            $category = new CategoriesController();
            $category->updateCategory();
        }
    }else{
        Redirect::to("home");
    }
?>
<div class="container my-4">
    <div class="row my-4">
        <div class="col-md-6 mx-auto my-4">
            <div class="card my-4">
                <div class="card-header">
                <div class="row justify-content-center">
                    <h3 class="card-title">
                        Modifier un categorie
                    </h3>
                </div>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text"
                                class="form-control"
                                name="cat_title" 
                                required autocomplete="off" 
                                placeholder="Titre" 
                                value="<?php echo $categoriesToUpdate->cat_title;?>">
                            <input type="hidden"
                            name="cat_id" 
                            value="<?php echo $categoriesToUpdate->cat_id;?>">
                        </div>
                      
                        <div class="form-group">
                        <div class="row justify-content-center">
                            <button name="submit" class="btn btn-primary">
                                Valider
                            </button>
                        </div>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>