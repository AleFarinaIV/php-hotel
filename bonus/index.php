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

$parking_filter = isset($_GET['parking']) ? $_GET['parking'] : '';

$vote_filter = isset($_GET['vote']) ? $_GET['vote'] : '';

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
            <div class="col-12">
                <form action="../bonus/index.php" method="GET">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <label class="fs-3" for="parking">Parcheggio</label>
                                <select name="parking" id="parking" class="form-select w-50" onchange="this.form.submit()">
                                    <option value="">Scegli una delle opzioni</option>
                                    <option value="true" <?php if ($parking_filter === 'true') echo 'selected' ?>>Yes</option>
                                    <option value="false" <?php if ($parking_filter === 'false') echo 'selected' ?>>No</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <div class="float-end text-end">
                                    <label class="fs-3" for="vote">Valutazione</label>
                                    <select name="vote" id="vote" class="form-select" onchange="this.form.submit()">
                                        <option value="">Scegli una valutazione</option>
                                        <option value="1" <?php if ($vote_filter === '1') echo 'selected' ?>>1/5 &#9733;</option>
                                        <option value="2" <?php if ($vote_filter === '2') echo 'selected' ?>>2/5 &#9733;</option>
                                        <option value="3" <?php if ($vote_filter === '3') echo 'selected' ?>>3/5 &#9733;</option>
                                        <option value="4" <?php if ($vote_filter === '4') echo 'selected' ?>>4/5 &#9733;</option>
                                        <option value="5" <?php if ($vote_filter === '5') echo 'selected' ?>>5/5 &#9733;</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container py-5">
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

                            if (
                                ($parking_filter === '') && ($vote_filter === '')
                            ) {
                                echo '<tr>';
                                echo '<td class="text-danger fst-italic fw-bold">' . $hotel['name'] . '</td>';
                                echo '<td>' . $hotel['description'] . '</td>';
                                echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                                echo '<td>' . $hotel['vote'] . '/5 &#9733;' . '</td>';
                                echo '<td>' . $hotel['distance_to_center'] . ' km' . '</td>';
                                echo '</tr>';
                            }
                            
                            elseif (
                                (($parking_filter === 'true' && $hotel['parking']) || ($parking_filter === 'false' && !$hotel['parking']) || $parking_filter === '') &&
                                (($vote_filter === '' || $vote_filter == $hotel['vote']))
                            ) {
                                echo '<tr>';
                                echo '<td class="text-danger fst-italic fw-bold">' . $hotel['name'] . '</td>';
                                echo '<td>' . $hotel['description'] . '</td>';
                                echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                                echo '<td>' . $hotel['vote'] . '/5 &#9733;' . '</td>';
                                echo '<td>' . $hotel['distance_to_center'] . ' km' . '</td>';
                                echo '</tr>';
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>