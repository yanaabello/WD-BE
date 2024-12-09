<?php
include("connect.php");
include("classes.php");

$viewIsland = array();
$contents = array();

$islandOfPersonalityID = $_GET['id'];

$viewIslandQuery = "SELECT name, longDescription, color FROM `islandsofpersonality` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$viewIslandResults = executeQuery($viewIslandQuery);

while ($viewIslandRow = mysqli_fetch_assoc($viewIslandResults)) {
    array_push($viewIsland, new View(
        $viewIslandRow['name'],
        $viewIslandRow['longDescription'],
        $viewIslandRow['color'],
    ));
}

$contentsQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$contentsResults = executeQuery($contentsQuery);

while ($contentsRow = mysqli_fetch_assoc($contentsResults)) {
    array_push($contents, new Content(
        $contentsRow['islandContentID'],
        $contentsRow['islandOfPersonalityID'],
        $contentsRow['image'],
        $contentsRow['content'],
        $contentsRow['color'],
    ));
}
?>
<!DOCTYPE html>

<head>
    <title>Content</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="container" style="margin-top: 50px;">
        <a href="islands.php" class="back-button">
            <img src="assets/images/btnBack.png" alt="Back Button">
        </a>

        <div class="row">
            <?php
            foreach ($viewIsland as $view) {
                echo $view->buildView();
            }
            ?>
        </div>

        <div class="content row align-items-center">
            <?php
            $counter = 0;
            foreach ($contents as $content) {
                echo $content->buildContent($counter);
                $counter++;
            }
            ?>
        </div>
    </div>
</body>

</html>