<?php

include 'connection.php';

$query = "UPDATE `buku` SET `judul` = 'ranger', `halaman` = 42, 
`abstrak` = 'bagaimana rasanya menjadi ranger' WHERE pengarang = 'suhu' ";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();

$output = ['Updated'];


header('Content-Type: application/json');
echo json_encode($output);