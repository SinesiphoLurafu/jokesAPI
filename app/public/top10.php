<?php
require 'db.php';
    $conn = mysqli_connect("localhost", "root", "root", "local");
    // trying to get top 10 jokes
    $sql = "SELECT * FROM jokes ORDER BY rating DESC LIMIT 10";
    $result = mysqli_query($conn,$sql);

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top 10 Jokes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>TOP 10 JOKES</h1>
    <?php
    // fetching jokes from the database
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rating = $row['rating'];
            $row_id = $row['id'];
            echo   $rating. "      ". $row['setup']. "<br>". $row['punchline']. "<br><br>";
           
            
        }
    }
    ?>
</body>
</html>