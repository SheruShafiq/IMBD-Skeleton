<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="styledetails.css">
</head>

<body>
<?php
    
$servername = "127.0.0.1";
$username = 'root';
$password = '';
$name = 'netland';



try {
    $conn = new PDO("mysql:host=localhost;dbname=netland", $username, $password) or die('Unable to connect');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e . getMessage();   
}

function getMessage() 
{
    "fuck";
}

if (isset($_GET["series"])) {
    $id = $_GET["series"];


    
    $query = "SELECT * FROM series WHERE id=$id";
    $result = $conn->query($query);
    $end = $conn->query($query);
    while ($row = $result->fetch()) {
        echo "<table>";
        echo "<tr><th id='title'>" . $row["title"] . "</th></tr>";
        echo "\n";
        echo "<tr id='description'><th>" . $row["summary"] . "</th></tr>";
        echo "</table>";
    }
} else {
    echo "";
}

if (isset($_GET["mobies"])) {   
    $id = $_GET["mobies"];
    $link = "https://www.youtube.com/watch?v=";
    $query = "SELECT * FROM movies WHERE id=$id";
    $result = $conn->query($query);
    $end = $conn->query($query);
    while ($row = $result->fetch()) {
        echo "<table>";
        echo "<tr><th id='title'>" . $row["title"] . "</th></tr>";
        echo "\n";
        echo "<tr id='description'><th>" . $row["summary"] . "</th></tr>";
        echo "</table>";
        $code =  $row["youtube_trailer_id"];
        echo "<object data='https://www.youtube.com/embed/$code?autoplay=1' 
        width='560px' height='315px'></object>";
    }
}
?>

</body>
</html>
