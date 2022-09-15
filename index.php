<?php

session_start();
session_destroy();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>FON FILMS</h1>


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

$orderdefault = "SELECT * FROM series";
$_SESSION['new'] = "SELECT * FROM series ORDER BY rating ASC";

if (isset($_POST['order'])) {
    if ($_POST['order'] == 1) {
        $orderdefault = $_SESSION['new'];
        echo "<h1>  </h1>";
    } else {
        echo "<h1></h1>";
    }
} else {
    echo "";
}


$query = $orderdefault;
if (isset($_POST['order'])) {
    $orderdefault = $_POST['order'];
}
$result = $conn->query($query);
$i = 0;
echo "<table id='series'>";
echo "<tr><td>" . '<b>Title<b/>' . "</td><td>" . '<form method="post">
<button type="submit" name="order" value="1">Rating</button>
</form>' . "</td><td>" . '<b>Awards</b>' . 
"<td>" . '<b>Seasons</b>' . "</td><td>" . '<b>Country</b>' . "</td><td>" . '<b>Language</b>' . 
"</td><td>" . '<b>More Details</b>' . "</td></tr>";


$series = ["<form action='details.php' method='get'>
<input type='hidden' name='series' value='0'>
<button type='submit'>Read More</button>  
</form>","<form action='details.php' method='get'>
<input type='hidden' name='series' value='1'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='2'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='3'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='4'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='5'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='6'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='7'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='8'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='series' value='9'>
<button type='submit'>Read More</button>  
</form>"];


while ($row = $result->fetch()) {
    $i = $i + 1;
    $series[$i];
    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['rating'] . "</td><td>" . $row['has_won_awards'] . "</td><td>" .
     $row['seasons'] . "</td><td>" . $row['country']  .  "</td><td>" . $row['spoken_in_language']  .  "</td><td>"  . $series[$i] . 
     "</td></tr>"; 
}
echo "</table>"; 



echo "<h1>MOBIES</h1>";



$orderdefault1 = "SELECT * FROM movies";
$_SESSION['new1'] = "SELECT * FROM movies ORDER BY length_in_minutes ASC";

if (isset($_POST['orderm'])) {
    if ($_POST['orderm'] == 1) {
        $orderdefault1 = $_SESSION['new1'];
        echo "<h1>  </h1>";
    } else {
        echo "<h1></h1>";
    }
} else {
    echo "";
}


$query1 = $orderdefault1;
if (isset($_POST['orderm'])) {
    $orderdefault1 = $_POST['orderm'];
}
$result1 = $conn->query($query1);
$i = 0;
echo "<table id='movies'>";
echo "<tr><td>" . '<b>Title<b/>' . "</td><td>" . 
'<form method="post">
<button type="submit" name="orderm" value="1">Rating</button>
</form>' . "</td><td>" . '<b>Release</b>' .
"<td>" . '<b>Origin</b>' . "</td><td>" . '<b>More Details</b>' . "</td></tr>";

$mobies = ["<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='0'>
<button type='submit'>Read More</button>  
</form>","<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='1'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='2'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='3'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='4'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='5'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='6'>
<button type='submit'>Read More</button>  
</form>",  "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='7'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='8'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='9'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='10'>
<button type='submit'>Read More</button>  
</form>",  "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='11'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='12'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='13'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='14'>
<button type='submit'>Read More</button>  
</form>",  "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='15'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='16'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='17'>
<button type='submit'>Read More</button>  
</form>", "<form action='details.php' method='get'>
<input type='hidden' name='mobies' value='18'>
<button type='submit'>Read More</button>  
</form>"];
while ($row = $result1->fetch()) { 
    $i = $i + 1;
    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['length_in_minutes'] . 
    "</td><td>" . $row['released_at'] . "</td><td>" . $row['country_of_origin']  .  
    "</td><td>" . $mobies[$i] . "</td></tr>"; 
}
echo "</table>"; 

?>
<form method="post" action="askfill.php">
<button type="submit" name="changes" value="1" id="edit">Add to data</button>
</form>


<!-- use a get function that scans the name of the click of the link and if esle statements to change the info dynamically -->
</body>
</html>

