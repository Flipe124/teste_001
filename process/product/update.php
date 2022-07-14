<?php
include_once '../../Database/Database.php';

//$id = isset($_GET["id"]) ? $_GET["id"] : NULL; // Quando utilizo essse ou o respectivo não salva no BD!!!
$id = isset($_POST["id"]) && $_POST["id"] != "" ? $_POST["id"] : NULL;
$name = isset($_POST["name"]) && $_POST["name"] != "" ? $_POST["name"] : NULL;
$date_of_birth = isset($_POST["date_of_birth"]) && $_POST["date_of_birth"] != ""  ? $_POST["date_of_birth"] : NULL;
$email  = isset($_POST["email"]) && $_POST["email"] != ""  ? $_POST["email"] : NULL;

if (!$name) {
    header("Location: ../wdevel/html/edit.php?msg=name");
    return;
}

if (!$date_of_birth) {
    header("Location: ../wdevel/html/edit.php?msg=date_of_birth");
    return;
}
// // INSERIR NO BD
$sql = ('UPDATE product SET name= :name, date_of_birth= :date_of_birth, email= :email WHERE id= :id');

$update = Database::connection()->prepare($sql);
$update->bindParam(':id', $id, PDO::PARAM_INT);
$update->bindParam(':name', $name, PDO::PARAM_STR);
$update->bindParam(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
$update->bindParam(':email', $email, PDO::PARAM_STR);

if ($update->execute()) {
    header("Location: ../../html/edit.php?id=$id&msg=success");// Estou testando
    return;
} else {
    header("Location: ../../html/edit.php?msg=error");
    return;
}
?>