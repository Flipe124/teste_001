<?php
include_once '../../Database/Database.php';
include_once '../../product_sy/html/edit.php';

//$id = isset($_GET["id"]) ? $_GET["id"] : NULL; // Quando utilizo essse ou o respectivo não salva no BD!!!
$id = isset($_POST["id"]) && $_POST["id"] != "" ? $_POST["id"] : NULL;
$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$description  = isset($_POST["description"]) && $_POST["description"] != ""  ? $_POST["description"] : NULL;

if (!$name) {
    header("Location: ../../process/product/update.php?msg=name");
    return;
}

// // INSERIR NO BD
$sql = ('UPDATE product SET name= :name, description= :description WHERE id= :id');

$update = Database::connection()->prepare($sql);
$update->bindParam(':id', $id, PDO::PARAM_INT);
$update->bindParam(':name', $name, PDO::PARAM_STR);
$update->bindParam(':description', $description, PDO::PARAM_STR);

if ($update->execute()) {
    header("Location:  ../../product_sy/html/edit.php?id=$id&msg=success");// Estou testando
    return;
} else {
    header("Location: .../../product_sy/html/edit.php?msg=error");
    return;
}
?>