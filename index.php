  GNU nano 7.2                                                          index.php                                                                   <?php
require_once('connexion_bdd.php');

$requete_select = 'select * from birthdays';

$select = $cnx->query($requete_select);

$birthdayList = array();

while($d = $select->fetch(PDO::FETCH_OBJ)){
array_push($birthdayList, ['id' => $d->id, 'name' => $d->name, 'date' => $d->date, 'sex' => $d->sex, 'avatar' => $d->avatar, 'relationship' => $d->>}

echo json_encode($birthdayList);

?>