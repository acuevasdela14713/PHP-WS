<?php
/*

https://developer.spotify.com/console/get-playlist-followers-contains/
JSON array format 1 element
[
  true
]

JSON array format 3 elements

[
  true,
  false,
  false
]

ids
jmperezperez,thelinmichael,wizzler

JSON OBJECT
1 element
{
  "jmperezperez" : true,

}

3 elements

{
  "jmperezperez" : true,
  "thelinmichael" : true,
  "wizzler" : true
}

JSON STRING

"{
  "jmperezperez" : true,

}"

"{
  "jmperezperez" : true,
  "thelinmichael" : true,
  "wizzler" : true
}"

*/

// crear json amb

$jmperezperez = array(true,false,false);

echo var_dump($jmperezperez);
echo "<br>";
echo print_r($jmperezperez);

$jmperezperezJSON = json_encode($jmperezperez);

echo "<br>";
echo "<br>";
echo var_dump($jmperezperezJSON);
echo "<br>";
echo print_r($jmperezperezJSON);


?>

