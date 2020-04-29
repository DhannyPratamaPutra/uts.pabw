<?php $hostName = "localhost";
$dbName = "blazehaz_makanan";
$userName = "blazehaz_admin";
$password = "!lcbthm123";
try {
    $pdo = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
