<?php
// include 'c_mysql.php';
//conect to database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'base_vocar';

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM slike");
$stmt->execute();

header('Content-Type: application/json');

if ($_GET["type"] == 'slike') {
$result = $stmt->fetchAll();
$vrati_slike = [];
foreach ($result as $slika) {
$vrati_slike[] = [
'Naslov' => $slika['Naslov'],
'Putanja' => $slika['Putanja']
];
}
echo json_encode($vrati_slike);
} else {
('Zahtev nije validan.');
}

?>