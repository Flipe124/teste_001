<?php //Em modificação
include_once '../wdevel/Database/Database.php';

$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$description  = isset($_POST["description"]) && $_POST["description"] != ""  ? $_POST["description"] : NULL;

if (!$name) {
    header("Location: ../../html/create.php?msg=name");
    return;
}

if (!$date_of_birth) {
    header("Location: ../../html/create.php?msg=date_of_birth");
    return;
}

// // INSERIR NO BD
$sql = ("INSERT INTO `user` (`name`, `description`) VALUES (:name, :description)");

$insert = Database::connection()->prepare($sql);
$insert->bindParam(':name', $name, PDO::PARAM_STR);
$insert->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
$insert->bindParam(':description', $description, PDO::PARAM_STR);

if ($insert->execute()) {
    header("Location: ../../html/create.php?msg=successC");
    return;
} else {
    header("Location: ../../html/create.php?msg=error");
    return;
}
