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

$jmperezperezJSON_DECODE = json_decode($jmperezperezJSON);

echo "<br>";
echo "<br>";
echo var_dump($jmperezperezJSON_DECODE);
echo "<br>";
echo print_r($jmperezperezJSON_DECODE);

echo "<br><br>";
echo $jmperezperezJSON_DECODE[0]."<br><br>";

$elements3 = '{"jmperezperez": true,"thelinmichael": false,"wizzler": false}';
echo "3 elements string format<br>";
var_dump($elements3)."<br>";
print_r($elements3)."<br>";
echo "<br>";
$resul_arr_ass = json_decode($elements3, true);
echo "jmperezperez ".$resul_arr_ass["jmperezperez"]."<br>";
echo "thelinmichael ".$resul_arr_ass["thelinmichael"]."<br>";
echo "wizzler ".$resul_arr_ass["wizzler"]."<br>";


?>
