<?php

    include 'connection.php';

    $query = "INSERT INTO `buku`(`judul`, `pengarang`, 
     `halaman`, `tanggal`, `abstrak`) VALUES('ultramen','suhu', 
     '14', '2021-06-06', 'asfdtgyhakwjdg') ";
    $statement = $connection->query($query);
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $statement->fetchAll();

    $output = ['Insert '];


header('Content-Type: application/json');
echo json_encode($output);

?>