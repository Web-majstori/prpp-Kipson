<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "korisnik";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $jmbag = $_POST['jmbag'];
    $smjer = $_POST['smjer'];

    $sql = "INSERT INTO prijave (ime, prezime, jmbag, smjer) VALUES ('$ime', '$prezime', '$jmbag', '$smjer')";

    if ($conn->query($sql) === TRUE) {
        echo "Podaci su uspješno uneseni!";
    } else {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

//
CREATE DATABASE korisnik;

USE korisnik;

CREATE TABLE prijave (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(255) NOT NULL,
    prezime VARCHAR(255) NOT NULL,
    jmbag VARCHAR(255) NOT NULL,
    smjer VARCHAR(255) NOT NULL
);

//