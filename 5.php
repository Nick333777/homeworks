<?php

function takeArrayValues($array, $keys = true){
$arr = array(15, 14, true, "ds", -0.5);

foreach($arr as  $value) {
if (is_array($value)) {takeArrayValues($value);}
if ($keys = false) {
                                                      // $key - ������ �������� �������, $value - �������� �������� �������
   echo " $value <br/>";}
   elseif ($keys = true){
   echo "$keys <br/>";}
}
}

$a = takeArrayValues($keys = true);
echo $a;
echo "<br/>";
function takeArrayValues1($array, $keys = true){
$arr = array(15, 14, true, "ds", -0.5);

foreach($arr as  $keys) { // $key - ������ �������� �������, $value - �������� �������� �������
   echo " $keys <br/>";
}
}
$b = takeArrayValues1();
echo $b;
?>