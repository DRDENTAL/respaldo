<?php 
$datetime1 = new DateTime($alu->fecha_nacimiento);
$datetime2 = \Carbon\Carbon::now();
echo "f1: ".$datetime1."- f2: ". $datetime2;
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a días');
//echo (\Carbon\Carbon::createFromDate(+$a+)->age)-3; 
?>