<?php
$rate = 28.3;
$data = array(50000, 30000, 45000, 80000, 120000);
for ($i=0; $i<count($data); $i++) {
	echo "NTD " . $data[$i] . " exchange to " .
		round ($data[$i] / $rate, 2) . 
		 " on " . date("Y/m/d") . "<br>";
	" USD<br>";
}
	
?>