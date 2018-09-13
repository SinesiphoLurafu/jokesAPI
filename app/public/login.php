<?php
    require 'db.php';
    function login(string $email, string $password) : string {
        global $conn;
        $errors = validateLogin($email, $password);
        if ($errors == '') {
          $encpassword = md5($password);
          $sql = "SELECT COUNT(*) AS 'exists' FROM users WHERE email = '$email' AND password = '$encpassword'";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
            if ($row['exists'] == 0) {
              $errors = 'Not valid email or password';
            }
          }
        }
        return $errors;
      }
      
      function validateLogin(string $email, string $password) : string {
        $errors = '';
        if ($email == '' ) {
          $errors = $errors . 'Please provide a email.';
        }
        if ($password == '' ) {
          $errors = $errors . 'Please provide a password.';
        }
        return $errors;
      }
      if(isset($_POST['submit'])){
        header('Location: jokes.php');
      }
    
    //
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
    <style>
      @import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
      @import url('https://fonts.googleapis.com/css?family=Kalam');

      body{
        background-color: orangered;
      }
      #input{
        width: 300px;
        height: 40px;
        text-align: center;
        border-color: orange;
      }
      div{
        text-align: center;
      }
      #login{
        background-color: yellow;
        width: 310px;
        height: 40px;
        border-radius: 5px;
        border-color: orange;
        color: #DE1A1A;
      }
      h1{
        color: yellow;
        text-align: center;
        font-size: 90px;
        font-family: 'Kalam';
      }
    </style>
</head>
<body>
      <h1>Login and get started!</h1>
    <form action="" method = "POST">
      <div>
        <input type="email" name="email" id="input" placeholder = "E-mail"><br><br>
        <input type="password" name="password" id="input" placeholder = "Password"><br><br>
        <input type="submit" name= "submit" value="Login" id = "login">
        </div>
    </form>
</body>
</html>