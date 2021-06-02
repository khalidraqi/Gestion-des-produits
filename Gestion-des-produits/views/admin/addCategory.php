<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
        $categories = new CategoriesController();
        $categories->newCategory();
         
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
                        Ajouter un category
                    </h3>
                </div>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text"
                            class="form-control"
                            name="cat_title" required autocomplete="off" placeholder="Name" id="">
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