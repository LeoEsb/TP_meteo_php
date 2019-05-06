<?php
$date = date("l-n-y");		
$hours = date("H:i:s);		
print("$date, $hours");
if ($hours > 7 || $hours < 19)
{
	echo '<style> body {
	background-color : #000;
	color : #FFF;
	</style>'
}
echo '<a href="./bordeaux.php>"Bordeaux</a>';
echo '<a href="./paris.php>"Paris</a>';
?>