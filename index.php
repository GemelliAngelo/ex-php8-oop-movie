<?php

require_once './Traits/hasRating.php';

require_once './Models/genre.php';

require_once './Models/movie.php';

require_once './db/movies.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP MOVIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row g-3 mt-auto justify-content-center align-items-center">

            <?php
                foreach ($movies as $movie) {
            ?>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $movie->title; ?></h4>
                        <h5 class="card-title"><?php echo $movie->director; ?></h5>
                        <p class="card-text"><?php echo join(",",$movie->genres->name) ?></p>
                        <p class="card-text text-end"><?php echo $movie->year; ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>