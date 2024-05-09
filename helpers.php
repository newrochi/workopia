<?php 

function basePath($path){
    return __DIR__."/".$path;
}

//Load a view
function loadView($name){
    $viewPath= basePath("views/{$name}.view.php");
    if(file_exists($viewPath)){
        require $viewPath;
    }else{
        echo "View '{$name}' does not exist!";
    }
}

//Load a partial
function loadPartial($name){
    $partialPath= basePath("views/partials/{$name}.php");
    if(file_exists($partialPath)){
        require $partialPath;
    }else{
        echo "Prtial view '{$name}' does not exist!";
    }
}

//Inspect a value(s)(like dd in Laravel without killing the page)
function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//Inspect a value(s) and kills the page(like dd in Laravel)
function inspectAndDie($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}