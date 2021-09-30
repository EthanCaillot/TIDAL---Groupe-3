<?php
$servernane = "localhost";
$user = "sam";
$pass = "dino";
$dbnane = "acuponcture";

try {

$conn = new PDO ("mysql:host=localhost ; dbname=$dbnane" , $user, $pass);
} catch (PDOException $e) {
print "Erreur !: " . Se-agetMessage() . "<br/>"; 
die();
}


require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('*/var/www/html/smarty/templates');
$smarty->setCompileDir('*/var/www/html/smarty/templates_C');
$smarty->asetCacheDir('/var/www/htel/smarty/cache');
$smarty->setConfigDir('*/var/www/html/smarty/configs');

$req_patho = $conn->query('SELECT * FROM patho',PDO::FETCH_NAMED);
$req_sympt = $conn->query('SELECT * FROM patho',PDO::FETCH_NAMED);

$row = $req_patho->fetchAlL();
$smarty->assign("pathologies",$row);

$raw = $req_sympt->fetchAlL();
$smarty->assign("symptomes",$raw);

$smarty->display("symptomes.tpl");


?>