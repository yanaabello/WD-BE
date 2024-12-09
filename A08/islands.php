<?php
include("connect.php");
include("classes.php");

$islands = array();

$islandsQuery = "SELECT * FROM islandsofpersonality";
$islandsResults = executeQuery($islandsQuery);

while ($islandRow = mysqli_fetch_assoc($islandsResults)) {
    array_push($islands, new Island(
        $islandRow['islandOfPersonalityID'],
        $islandRow['image'],
        $islandRow['name'],
        $islandRow['color'],
        $islandRow['shortDescription']
    ));
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Islands of Personality</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="assets/images/icoPage.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
    <div class="bg-image">
        <img src="assets/images/bg.jpg" alt="Background Image">
    </div>

    <div class="container island-container">
        <a href="index.php" class="back-button">
            <img src="assets/images/btnBack.png" alt="Back Button">
        </a>

        <div style="text-align: center; margin-top: 100px; font-family: 'Slackey', cursive;">
            <h1 style="color: white; font-size: 50px;">Islands of Personality</h1>
        </div>

        <div class="row mt-5">
            <?php
            foreach ($islands as $island) {
                echo $island->buildIslands();
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>