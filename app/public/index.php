<?php
    if(isset($_POST['login'])){
        header('Location: login.php');
    }
    
    if(isset($_POST['top'])){
        header('Location: top10.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Kalam|Neucha|Permanent+Marker');
        button{
            color: red;
            font-size: 20px;
        }
        #login{
            background-color: yellow;
            color: red;
            font-family: 'Kalam';
            width: 100px;
            height: 50px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to the Jokes Page!</h1>
        
        <form action="" method= "POST">
        <div>
            <button type="submit" name = "top" >View Top 10 Jokes</button>
        </div>
        <div>
            <button type="submit" name = "jokes">View Jokes</button>
        </div>
        <div>   
        <input type="submit" value="Login" name= "login" id = "login">
        </div>
        
        </form>
    </header>
    
    
</body>
</html>