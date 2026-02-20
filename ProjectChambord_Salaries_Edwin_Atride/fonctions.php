<?php
require_once("connexion.php");
function getLesContacts(){
try {
global $conn ;
$sql = "SELECT * FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}


function NbSalaries(){
try {
global $conn ;
$sql = "SELECT COUNT(`prenom`) As NbSalarier FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}

function Salairemoyen(){
try {
global $conn ;
$sql = "SELECT AVG(`salaire`) As MoyenneSalaire FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}

function SalaireMAXMIN(){
try {
global $conn ;
$sql = "SELECT MAX(`salaire`) AS MAXSALAIRE, MIN(`salaire`) AS MINSALAIRE FROM salaries";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}

function NbSalariesService(){
try {
global $conn ;
$sql = "SELECT COUNT(`prenom`) AS nombre, `service` FROM salaries GROUP BY `service`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultat ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}

function ajouterSalarie($data){
    global $conn;

    $sql = "INSERT INTO salaries(nom, prenom, salaire)
            VALUES(:nom, :prenom, :salaire)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nom' => $data['nom'],
        ':prenom' => $data['prenom'],
        ':salaire' => $data['salaire']
    ]);
}


?>



