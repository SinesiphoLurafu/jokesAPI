<?php
require 'db.php';
global $conn;
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
   );
   $conn = mysqli_connect("localhost", "root", "root", "local");
   
   $json_url = "https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_ten";
   $json = file_get_contents($json_url,false,stream_context_create($arrContextOptions));
   //echo $json;
   $data = json_decode($json, TRUE);
   echo "<pre>";
   //print_r($data);
   echo "</pre>";

   foreach($data as $joke){
       $type = $joke['type'];
       $punchline = $joke['punchline'];
       $setup = $joke['setup'];
       $joke_id = $joke['id'];
       $count = "SELECT COUNT(*) FROM jokes WHERE joke_id = $joke_id";
       mysqli_query($conn,$count);
      
       $sql = "INSERT IGNORE INTO jokes (type, setup, punchline, joke_id) VALUES ('$type', '$setup','$punchline', $joke_id)";
       mysqli_query($conn,$sql);
       
       
   }
//insert all the jokes into database

//loop through jokes
// $i = 0;
// while ($i < 56){
//     $id = $data[$i]['id'];
//     $type = $data[$i]['type'];
//     $setup = $data[$i]['setup'];
//     $punchline = $data[$i]['punchline'];
//     echo $id;
//     $sql = "INSERT INTO jokes(id,type,setup,punchline) VALUES ('$id','$type','$setup','$punchline') ";
//     mysqli_connect($sql);
//     $i ++;

// }
// foreach(){

// }

//(if it doesnt exist already){
  //insert query into db
//}

//end loop
?>