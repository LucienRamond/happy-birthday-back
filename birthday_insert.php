<?php
require_once('connexion_bdd.php');

$requete = "INSERT INTO `birthdays`.`birthdays` (name, date, sex, avatar, relationship) VALUES (:name, :date, :sex, :avatar, :relationship)";

$insert = $cnx->prepare($requete);

$content = trim(file_get_contents("php://input"));

$data = json_decode($content, true);

$name = $data['data']['name'];
$relationship = $data['data']['relationship'];
$date = $data['data']['birth'];
$sex = $data['data']['sex'];
$avatar = $data['data']['avatarUrl'];

var_dump($data['data']['name']);

$insert->execute(array('name'=>$name, 'date'=>$date, 'sex'=>$sex, 'relationship'=>$relationship, 'avatar'=>$avatar));

?>