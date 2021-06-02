<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    $loginUser = new UsersController();
    $loginUser->auth();
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 my-4 mx-auto">
            <div class="card my-4">
                <div class="card-header my">
                    <div class="row justify-content-center">
                        <h3 class="card-title">
                            Connexion
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input autocomplete="off" type="text" class="form-control" name="username" 
                            placeholder="Pseudo" id="">
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="password" class="form-control" name="password" 
                            placeholder="Mot de passe" id="">
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <button name="submit" class="btn btn-primary my-2">
                                    Connexion
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                     <div class="row justify-content-center">
                         <a href="<?php echo BASE_URL;?>" class="btn btn-link">
                             fgt password
                         </a>
                     </div>    
                </div>
            </div>
        </div>
    </div>
</div>