<?php
$hostnom = 'host=srvmysql.btssio.dedyn.io';
$usernom = 'RAHMANI';
$password = '20022006';
$bdd = 'RAHMANI_biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>