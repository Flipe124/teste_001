<?php // MODIFICADO - CERTO
include_once '../../Database/Database.php';

$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$description  = isset($_POST["description"]) && $_POST["description"] != ""  ? $_POST["description"] : NULL;

if (!$name) {
    header("Location: ../../product_sy/html/create.php?msg=name");
    return;
}

// // INSERIR NO BD
$sql = ("INSERT INTO `product` (`name`, `description`) VALUES (:name, :description)");

$insert = Database::connection()->prepare($sql);
$insert->bindParam(':name', $name, PDO::PARAM_STR);
$insert->bindParam(':description', $description, PDO::PARAM_STR);

if ($insert->execute()) {
    header("Location: ../../product_sy/html/create.php?msg=success");
    return;
} else {
    header("Location: ../../product_sy/html/create.php?msg=error");
    return;
}
