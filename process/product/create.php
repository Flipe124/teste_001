<?php // MODIFICADO - CERTO
include_once '../../Database/Database.php';

$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$description  = isset($_POST["description"]) && $_POST["description"] != ""  ? $_POST["description"] : NULL;

if (!$name) {
    header("Location: ../../product/create.php?msg=name");
    return;
}

$sql = ("INSERT INTO `product` (`name`, `description`) VALUES (:name, :description)");

$insert = Database::connection()->prepare($sql);
$insert->bindParam(':name', $name, PDO::PARAM_STR);
$insert->bindParam(':description', $description, PDO::PARAM_STR);

if ($insert->execute()) {
    header("Location: ../../product/create.php?msg=success");
    return;
} else {
    header("Location: ../../product/create.php?msg=error");
    return;
}
