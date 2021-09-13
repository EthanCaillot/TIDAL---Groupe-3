<?php
//Connection à la base
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

//Gestion des erreurs de connections
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

//fermeture d'une connection
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
// utiliser la connexion ici
$sth = $dbh->query('SELECT * FROM foo');

// et maintenant, fermez-la !
$sth = null;
$dbh = null;

//Connection persistantes
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));
?>

