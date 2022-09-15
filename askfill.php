<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penetration</title>
    <link rel="stylesheet" href="styleask.css">
</head>
<body>
<h1>Self INSERT Incel</h1>
<form method="post">
    <h3>Title</h3>
    <input type="text" name="title" id="t1">
    <h3>Release Date</h3>
    <input type="date" name="release" id="r2">
    <h3>Length in minutes</h3>
    <input type="number" name="length" id="l3">
    <h3>Rating</h3>
    <input type="number" name="rt" id="r3">
    <h3>Country of Origin</h3>
    <select name="country" id="lans">
    <option value="UK">UK</option>
    <option value="NL">NL</option>
  </select>
    <h3> Trailer </h3>
    <input type="text" name="yt" id="y5">
    <h3> Description </h3>
    <input type="text" name="description" id="y5">
    <h3>Awards</h3>
    <input type="text" name="aw" id="a6">
    <h3>Nr of Seasons</h3>
    <input type="text" name="ssn" id="ss">
    <h3>Language</h3>
    <select id="lans" name="lang">
    <option value="EN">EN</option>
    <option value="NL">NL</option>
  </select>
  <h3>Add to</h3>
  <div>
  <input type="radio" id="series" name="series" value="series">
  <label for="series">Series</label>
  </div>
  <div>
  <input type="radio" id="movies" name="movies" value="movies">
  <label for="movies">Mobies</label>
  </div>
    <button type="submit" name="save" value="1" id="s7">Save Changes</button>
</form>


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

if (isset($_POST['save'])) {
    if (isset($_POST["movies"])) {
        $name = $_POST['title'];
        $release =  $_POST['release'];
        $length  = $_POST['length'];
        $origin = $_POST['origin'];
        $YTlink =  $_POST['yt'];
        $description =  $_POST['description'];

    

        $sql = "
        INSERT INTO `movies` (`title`, `length_in_minutes`, `released_at`, `country_of_origin`, `youtube_trailer_id`, `summary`) VALUES
        ('$name', $length, '$release', '$origin', '$YTlink', '$description')";

 
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } elseif (isset($_POST["series"])) {        
        $name = $_POST['title'];
        $rating =  $_POST['rt'];
        $summary  = $_POST['description'];
        $awards = $_POST['aw'];
        $seasons =  $_POST['ssn'];
        $country =  $_POST['description'];
        $language =  $_POST['country'];
    
        
    
        $sql = "
        INSERT INTO `series` (`title`, `rating`, `summary`, `has_won_awards`, `seasons`, `country`, `spoken_in_language`) VALUES
        ('$name', $rating, '$summary', '$awards', '$seasons', '$country', '$language')";
    
     
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}

?>
 <form action="index.php" method="post">
     <button type="submit" class="d6">Go back</button>
 </form>
</body>
</html>
