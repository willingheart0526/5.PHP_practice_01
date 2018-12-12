<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative
		*/

	echo '<br>';

	$lists = array(23,24,543,234,7654,3456);

	$lists_assoc = array("number" => 10);

	echo $lists[0] . "<br>";

	echo $lists_assoc['number'] . "<br>";

?>

<?php 
$a = 10;

$b = 20;

echo '<br>';

$a = $a^$b;
$b = $a^$b;
$a = $a^$b;
echo ($a) . '<br>' . ($b) . '<br>';


list($a,$b) = array($b,$a);
echo ($a) . '<br>' . ($b);



?>


		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>