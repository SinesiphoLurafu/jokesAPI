<?php
    $servername = '192.168.95.100:4071';
    $username = 'root';
    $password = 'root';
    $database = 'local';
    
    function connect($servername, $username, $password, $database) {
      $conn = mysqli_connect($servername, $username, $password, $database);
    
      // Check connection
      if ($conn->connect_error) {
          // Stop processing
          die("Connection failed: " . $conn->connect_error);
      }
      return $conn;
    }
?>