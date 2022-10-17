<?php
define('SKEY', 'VMAD');
require_once '../db.php';

$prepare=$sql->prepare('select `login`, `couleur`, `ipv4` from `chatty`.`utilisateur` where `ipv4`=:ip');

$prepare->bindValue('ip',$_SERVER['REMOTE_ADDR']);
$prepare->execute();
$resultat=$prepare->fetchAll(PDO::FETCH_ASSOC);  

if(!empty($resultat)){
    echo json_encode($resultat);
} else {
    http_response_code(402);
    echo 'not found';
}

exit;

?>