<?php
define('SKEY', 'VMAD');
require_once '../db.php';

$login = $_POST['login'];

$prepare=$sql->prepare('insert into `chatty`.`utilisateur` (`login`) values (`login`=lg');

$prepare->bindValue('lg',$login);
$prepare->execute();
$resultat=$prepare->fetchAll(PDO::FETCH_ASSOC);  


exit;
?>