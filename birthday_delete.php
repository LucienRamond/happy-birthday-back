<?php
require_once('connexion_bdd.php');

$requete = "DELETE FROM birthdays WHERE id = :id";

$delete = $cnx->prepare($requete);

$content = trim(file_get_contents("php://input"));

$id = json_decode($content, true);

echo $id;

$delete->execute(array('id'=>$id));

?>