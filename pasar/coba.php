<?php
$makanan = [
	["nasgor", "migor", "bagor"],
	["susu murni", "kelapa murni", "madu murni"],
	[10000,20000,30000]

];
for ($i=0; $i <count($makanan); $i++) {
	for ($j=0; $j <count($makanan) ; $j++) { 
		echo $makanan[$i][$j]. "";
	}
	echo "<br/>";
}
// foreach ($makanan as $maem) {
// 	echo $maem.", ";
// 	# code...
// }