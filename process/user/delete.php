<?php
include_once '../../Database/Database.php';

$id = isset($_GET["id"]) && $_GET["id"] != "" ? $_GET["id"] : NULL;
var_dump($id);

$sql = ('DELETE FROM user WHERE id= :id');

$delete = Database::connection()->prepare($sql);
$delete->bindParam(':id', $id, PDO::PARAM_INT);

if ($delete->execute()) {
    header("Location: ../../user/index.php?msg=success");
    return;
} else {
    header("Location: ../../user/index.php?msg=error");
    return;
}
?>