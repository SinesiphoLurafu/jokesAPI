<?php
function getJokes($json_url){

$ch = curl_init( $json_url );
$options = array(
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
);
curl_setopt_array( $ch, $options );
  $result = curl_exec($ch);

$data = json_decode($result,true);

return $data;
}


$clintJokes = getJokes('https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_ten');

//insert all the jokes into database

//loop through jokes

//(if it doesnt exist already){
  //insert query into db
//}

//end loop
?>