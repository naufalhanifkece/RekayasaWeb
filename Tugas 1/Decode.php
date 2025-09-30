<?php
$jsonobj = '{"Motul":1000,"Shell":800,"Deltalube":1200}';

$obj = json_decode($jsonobj);
echo "=== Object ===<br>";
echo $obj->Motul . "<br>";
echo $obj->Shell . "<br>";
echo $obj->Deltalube . "<br>";

$arr = json_decode($jsonobj, true);
echo "=== Array ===<br>";
echo $arr["Motul"] . "<br>";
echo $arr["Shell"] . "<br>";
echo $arr["Deltalube"] . "<br>";
?>
