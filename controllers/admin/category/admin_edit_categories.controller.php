<?php
require "../../../database/database.php";
require "../../../models/admin.model.php";


$id = isset($_GET['id'])  ? $_GET['id'] : null;{
//    $categories = getCategory($id);
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']); 
    // updateCategory($name, $description, $id);

    updateCategory($name,$description, $id);
    header('Location: /admin_categories');
}

