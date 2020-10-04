<?php 
function calculation($num1, $num2,...$othernum){
	$total = $num1 * $num2  ;
	foreach ($othernum as $num3) {
		$total += $num3;
	}
	return $total;
}

$result = calculation(10,50,20);
echo "<p>$result</p>";

$words = array("A&W","Burger king","Wendy","Tim hortons","McDonalds");
$lower = array_map(function($a){
	return (strtolower($a));},$words);

foreach($lower as $arr){
echo "<p>$arr</p>";
}

usort($words, function($a,$b){
	return strlen($a) <=> strlen($b);
});
foreach($words as $str)

{
	echo"<p>$str</p>";
}
?>

