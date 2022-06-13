<?php
require_once('Select.php');
$var = file_get_contents('php://input');
session_start();
$select = new Select();
// $search = $_POST['search'];
// echo "<pre>";
// var_dump($search);
// echo "</pre>";
// foreach ($result as $results) {
//     echo "<pre>";
//     var_dump($results);
//     echo "</pre>";
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/search.css">
    <!-- <link rel="stylesheet" href="style/bootstrap.min.css"> -->
    <script src="search.js"></script>
    <title>Document</title>
</head>

<body>

    <h1>Mes Manga préféres</h1>

    <div class="form-container">
        <form class="form" method="GET" action="recherche.php/?search=">
            <input name="search" id="search" type="text" class="input" placeholder="ex: one piece, slam dunk" />
            <!-- <input type="submit" id="submit" name="submit" class="submit"> -->
            <button type="submit" class='result' value="submit">Tout les resultats</button>
        </form>

    </div>
    <div class="results-container">
        <ul class=" results-list" id="list">

        </ul>
    </div>

</body>

</html>