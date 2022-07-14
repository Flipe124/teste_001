<?php
include_once '../../Database/Database.php';

$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$date_of_birth = isset($_POST["date_of_birth"]) && $_POST["date_of_birth"] != ""  ? $_POST["date_of_birth"] : NULL;
$email  = isset($_POST["email"]) && $_POST["email"] != ""  ? $_POST["email"] : NULL;

if (!$name) {
    header("Location: ../../html/create.php?msg=name");
    return;
}

if (!$date_of_birth) {
    header("Location: ../../html/create.php?msg=date_of_birth");
    return;
}

// // INSERIR NO BD
$sql = ("INSERT INTO `user` (`name`, `date_of_birth`, `email`) VALUES (:name, :date_of_birth, :email)");

$insert = Database::connection()->prepare($sql);
$insert->bindParam(':name', $name, PDO::PARAM_STR);
$insert->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
$insert->bindParam(':email', $email, PDO::PARAM_STR);

if ($insert->execute()) {
    header("Location: ../../html/create.php?msg=success");
    return;
} else {
    header("Location: ../../html/create.php?msg=error");
    return;
}
