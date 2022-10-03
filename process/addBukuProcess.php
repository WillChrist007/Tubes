<?php

if (isset($_POST['add'])) {
    include('../db.php');

    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    $output="";

    foreach ($genre as $oneGenre) {
        $output.= $oneGenre;
        $output.= ", ";
    }

    $query = mysqli_query($con, "INSERT INTO series(name, genre, realese, episode, season, synopsis)
    VALUES ('$name', '$output', '$realese', '$episode', '$season', '$synopsis')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
        alert("Add Series Success");
        window.location = "../page/listSeriesPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Add Series Failed");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>