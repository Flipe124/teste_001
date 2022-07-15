<?php
include_once '../../Database/Database.php';

$id = isset($_POST["id"]) && $_POST["id"] != "" ? $_POST["id"] : NULL;
$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$description  = isset($_POST["description"]) && $_POST["description"] != ""  ? $_POST["description"] : NULL;

if (!$name) {
    header("Location: ../../product/edit.php?id=$id&msg=name");
    return;
}

$sql = ('UPDATE product SET name= :name, description= :description WHERE id= :id');

$update = Database::connection()->prepare($sql);
$update->bindParam(':id', $id, PDO::PARAM_INT);
$update->bindParam(':name', $name, PDO::PARAM_STR);
$update->bindParam(':description', $description, PDO::PARAM_STR);

if ($update->execute()) {
    header("Location:  ../../product/edit.php?id=$id&msg=success");
    return;
} else {
    header("Location: ../../product/edit.php?id=$id&msg=error");
    return;
}
?>