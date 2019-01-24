<link rel="stylesheet" href="style.css" type="text/css">
<?php
if (!empty($_POST)) {
$text = $_POST['text'];
$a = str_split($text);

$null = $a[0];
$first = $a[1];
$nf = $null . $first;
$Red = hexdec($nf);

$second = $a[2];
$third = $a[3];
$st = $second . $third;
$Green = hexdec($st);

$fourth = $a[4];
$fifth = $a[5];
$ff = $fourth . $fifth ;
$Blue = hexdec($ff);

$length = strlen($text); 


if ($length<6) {
echo '<h1>' . "Моля, въведи правилен код за цвета, който желаеш да провериш!" . '</h1>';
?>
			<html>
					 <img src='important.jpg' alt='important message' />
			 </html>
	 <?php
}
else {

if ($Green>$Red && $Green>$Blue || $Green==$Red || $Green==$Blue || $Red==$Blue) {
	echo '<h2>' . "Диана, тази рокля (с RGB код = " . $text . " ) е точно за теб, защото тя е повече зелена, отколкото червена или синя на цвят! =) " . '</h2>' ;

echo '<b>' . "R= " . $Red .  " ; " .'</b>' ;
echo '<b>' . "G= " . $Green .  " ; " .'</b>';
echo ' <b>'. "B= " . $Blue . '</b>';
?>	
			<html>
	 				<img src='happy.png' alt='Happy emoji' />
			 </html>
	 <?php
}
else{
	echo '<h2>' . "Диана, за съжаление - тази рокля (с RGB код = " . $text . " ) не е подходяща за теб, защото тя съдържа повече червен и син цвят, отколкото зелен! :( " . '</h2>' ;
echo '<b>' . "R= " . $Red . " ; " . '</b>' ;
echo '<b>' . "G= " . $Green .  " ; " .'</b>';
echo ' <b>'. "B= " . $Blue . '</b>';
	?>
			<html>
					 <img src='sad.png' alt='Sad emoji' />
			 </html>
	 <?php
	}

?>
			<html>
	<h3> <a href="form.html"> Начало </a> </h3>
			</html>
<?php
}

}

	

?>
