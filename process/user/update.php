<?php
include_once '../../Database/Database.php';

$id = isset($_POST["id"]) && $_POST["id"] != "" ? $_POST["id"] : NULL;
$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$date_of_birth = isset($_POST["date_of_birth"]) && $_POST["date_of_birth"] != ""  ? $_POST["date_of_birth"] : NULL;
$email  = isset($_POST["email"]) && $_POST["email"] != ""  ? $_POST["email"] : NULL;

if (!$name) {
    header("Location: ../../user/edit.php?id=$id&msg=name");
    return;
}

if (!$date_of_birth) {
    header("Location: ../../user/edit.php?id=$id&msg=date_of_birth");
    return;
}
$sql = ('UPDATE user SET name= :name, date_of_birth= :date_of_birth, email= :email WHERE id= :id');

$update = Database::connection()->prepare($sql);
$update->bindParam(':id', $id, PDO::PARAM_INT);
$update->bindParam(':name', $name, PDO::PARAM_STR);
$update->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
$update->bindParam(':email', $email, PDO::PARAM_STR);

if ($update->execute()) {
    header("Location: ../../user/edit.php?id=$id&msg=success");// Estou testando
    return;
} else {
    header("Location: ../../user/edit.php?id=$id&msg=error");
    return;
}
?>