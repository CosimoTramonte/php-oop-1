<?php
require_once __DIR__ . '/models/Movie.php';

$movies = [
    $ritornoAlFuturo = new Movie("Ritorno Al Futuro", "1h 35m", 4, new Genre(["comico", "scientifico"], "verde")),
    $spidermanFarFromHome = new Movie("Spiderman Far From Home", "2h 15m", 5, new Genre(["azione", "supereroi"], "verde")),
    $fastAndFourius = new Movie("Spiderman Far From Home", "1h 15m", 2, new Genre(["azione", "lotta"], "giallo")),
];

//var_dump($ritornoAlFuturo);
//var_dump($spidermanFarFromHome);
//var_dump($fastAndFourius);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>OOP</title>
</head>
<body>

    <div class="container my-5">

        <h1 class="mb-3">Lista Film</h1>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Durata</th>
                <th scope="col">Genere</th>
                <th scope="col">Ratings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($movies as $movie): ?>
                <tr>
                    <th scope="row"><?php echo $movie->movieName ?></th>
                    <td><?php echo $movie->movieDuration ?></td>
                    <td>
                        <?php foreach($movie->genres->genres as $gen): ?>
                            <?php echo $gen ?><br>
                        <?php endforeach; ?>
                    </td>
                    <td><?php echo $movie->starString ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>