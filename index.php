<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Boolean Hotels</title>
</head>

<body>
    <h1 class="text-center py-5">Boolean Hotels List</h1>

    <div class="container">
        <div class="row">
            <div class="col-12 fs-4">
                <table class="table border text-center">
                    <thead>
                        <tr>
                            <th class="text-danger fst-italic align-middle" scope="col">Name</th>
                            <th class="align-middle" scope="col">Description</th>
                            <th class="align-middle" scope="col">Parking</th>
                            <th class="align-middle" scope="col">Vote</th>
                            <th scope="col">Distance To Center
                                <div>km &#10132; <i class="bi bi-bullseye"></i></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel) {
                            echo '<tr>';
                            echo '<td class="text-danger fst-italic fw-bold">' . $hotel['name'] . '</td>';
                            echo '<td>' . $hotel['description'] . '</td>';
                            echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                            echo '<td>' . $hotel['vote'] . '/5 &#9733;' . '</td>';
                            echo '<td>' . $hotel['distance_to_center'] . ' km' . '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>