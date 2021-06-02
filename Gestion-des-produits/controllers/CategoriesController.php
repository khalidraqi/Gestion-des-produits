<?php

class CategoriesController{
    public function getAllCategories(){
        $categories = Category::getAll();
        return $categories;
    }
    public function getCategory(){
        if(isset($_POST["cat_id"])){
            $data = array(
                'id' => $_POST["cat_id"]
            );
            $category = Category::getCategoryById($data);
            return $category;
        }
    }
    public function newCategory(){
        if(isset($_POST["submit"])){
            $data = array(
                "cat_title" => $_POST["cat_title"],
            );
            $result = Category::addCategory($data);
            if($result === "ok"){
                Session::set("success","Category ajouté");
                Redirect::to("categories");
            }else{
                echo $result;
            }
        }
    }
    public function updateCategory(){
        if(isset($_POST["submit"])){
            $data = array(
                "cat_id" => $_POST["cat_id"],
                "cat_title" => $_POST["cat_title"],
            );
            $result = Category::editCategory($data);
            if($result === "ok"){
                Session::set("success","Category modifié");
                Redirect::to("categories");
            }else{
                echo $result;
            }
        }
    }
    public function removeCategory(){
        if(isset($_POST["delete_cat_id"])){
            $data = array(
                "id" => $_POST["delete_cat_id"]
            );
            $result = Category::deleteCategory($data);
            if($result === "ok"){
                Session::set("success","Category supprimé");
                Redirect::to("categories");
            }else{
                echo $result;
            }
        }
    }
}