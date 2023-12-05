<?php

@include('config.php');
session_start();

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    $sql = "SELECT * FROM movies WHERE title LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    $movies = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movies[] = [
                'posterUrl' => $row['posterUrl'],
                'nav' => $row['nav'],
                'title' => $row['title'],
                'genre' => $row['genre'],
                'releaseYear' => intval($row['releaseYear']),
                'imdb' => floatval($row['imdb']),
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($movies);
    }
    else {
        echo json_encode(['message' => 'Herhangi bir film bulunamadı.']);
    }
}
else {
    echo json_encode(['message' => 'Lütfen bir arama ifadesi belirtiniz']);
}
$conn->close();

?>