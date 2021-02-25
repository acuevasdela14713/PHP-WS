<?php
//endpoint: https://api.spotify.com/v1/playlists/{playlist_id}/followers/contains
//consuming a ws with php curl
//response: json in array format
try{
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQC-JFnXuziz1cN_wbsU4pTq6bXckXDNo7L_w9BT8amUJoSWChyCvInpl8kas5SScFLUZmZc-2g8ZiXk7fs043Ot0H0-jdSdvjy8NGvyJQH_mTeFV7dn3mb5ilZuGGT79HAju9Oqpb26qup0-tSs4dNbf7T_";
    header('Content-Type: application/json');


     $ch = curl_init('https://api.spotify.com/v1/playlists/3cEYpjA9oz9GiPac4AsH4n/followers/contains?ids=jmperezperez%2Cthelinmichael%2Cwizzler');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept,$header_content_type,$header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n"; //string
    $array_result = json_decode($result);
    echo var_dump($array_result);

    echo "\n";

    //foreach
    foreach ($array_result as $info) {
      if ($info == 1) {
        echo "true\n";
      } else {
        echo "false\n";
      }
    }

  }catch (Exception $e){
    echo "Exception message is: ".$e->getMessage();
  }
 ?>
