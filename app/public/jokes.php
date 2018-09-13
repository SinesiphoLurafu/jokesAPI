<?php
    require 'db.php';
    $conn = mysqli_connect("localhost", "root", "root", "local");
    $sql = "SELECT * FROM jokes order by RAND() LIMIT 1";
    $result = mysqli_query($conn,$sql);
    
    // if(isset($_POST['funny'])){
    //     $funsql = "UPDATE jokes SET rating = rating + 1 ";
    //     mysqli_query($conn,$funsql);
    // }
    if(isset($_POST['logout'])){
        header('Location: index.php');
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Jokes</h1>
    <?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rating = $row['rating'];
            $row_id = $row['id'];
            echo $row['setup']. "<br>". $row['punchline'];
            if(isset($_POST['funny'])){
                $funsql = "UPDATE jokes SET rating = $rating + 1 WHERE id = $row_id ";
                mysqli_query($conn,$funsql);
            }
            
        }
    }
    ?>
    <form action="" method="POST">
        <input type="submit" value="Funny" name = "funny" id = "rate">
        <input type="submit" value="Not Funny" name = "notfunny" id = "rate">
        <button id = "logout" id= "rate">Logout</button>
    </form>
</body>
</html>