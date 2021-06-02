<?php

if(isset($_COOKIE["success"])){
    echo "<div class='d-flex justify-content-center'><div class='alert alert-success my-4'>".$_COOKIE["success"]."</div></div>";
}

if(isset($_COOKIE["error"])){
    echo "<div class='d-flex justify-content-center'><div class='alert alert-danger my-4'>".$_COOKIE["error"]."</div></div>";
}

if(isset($_COOKIE["info"])){
    echo "<div class='d-flex justify-content-center'><div class='alert alert-info my-4'>".$_COOKIE["info"]."</div></div>";
}
