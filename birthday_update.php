<?php
require_once('connexion_bdd.php');

$requete = "UPDATE birthdays SET name = :name, date = :date, sex = :sex, avatar = :avatar, relationship = :relationship WHERE id = :id";

$update = $cnx->prepare($requete);

$content = trim(file_get_contents("php://input"));

$data = json_decode($content, true);

$name = $data['name'];
$relationship = $data['relationship'];
$date = $data['date'];
$sex = $data['sex'];
$avatar = $data['avatar'];
$id = $data['id'];

try{
$update->execute(array('name'=>$name, 'date'=>$date, 'sex'=>$sex, 'relationship'=>$relationship, 'avatar'=>$avatar, 'id'=>$id));
echo 'Update réussie !';
}catch(Exception $e){
$error = $e->getMessage();
echo $error;
}
?>