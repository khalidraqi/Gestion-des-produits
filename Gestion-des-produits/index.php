<?php
require_once './autoload.php';
require_once("./views/includes/header.php");

$home = new HomeController();

$pages = [
        'home','dashboard','updateProduct','deleteProduct',
        'addProduct','login','logout','products','orders','addOrder','categories',
        'addCategory','updateCategory','deleteCategory'
    ];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page === "dashboard" || $page === "deleteProduct"
            || $page === "addProduct"  || $page === "updateProduct" || $page === "products" ||
            $page === "orders" || $page === "categories" || $page === "addCategory" || $page === "updateCategory"
            || $page === "deleteCategory"){
                if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                    $admin = new AdminController();
                    $admin->index($page);
                }else{
                    include('views/includes/404.php');
                }
        }else{
            $home->index($page);
        }
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index("home");
}

require_once("./views/includes/footer.php");



