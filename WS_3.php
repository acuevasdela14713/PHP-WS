<?php
//endpoint: https://api.spotify.com/v1/users/{user_id}
//consuming a ws with php curl
//response: json in string format
//transform the response into an associative array
try{
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQBcvf0O-jUna-b08ii02abMUPGi3ypmcwzA3Z_huTIFy3AMLJkcGjCgn2TOgi02fWL6OWudBS5Q_yVeBtyZZIYG9i2yIvl7viAKmrC5GjcPnKsvuGwpomZQ8XnLnbiDht83_oFkqTT31D9JFbsJVhpW-U1i";
    header('Content-Type: application/json');

     $ch = curl_init('https://api.spotify.com/v1/users/smedjan');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept,$header_content_type,$header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n";//string
    $json_result = json_decode($result, true);//true: to be used as an associative array

    echo "display_name: ".$json_result['display_name']."\n";
    echo "href: ".$json_result['href']."\n";
    echo "id: ".$json_result['id']."\n";
    echo "type: ".$json_result['type']."\n";

}catch (Exception $e){
  echo "Exception message is: ".$e->getMessage();
}

 ?>
