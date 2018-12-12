<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

	echo rand(1,10000);

	echo "<br />";

	$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

	$valueLength = strlen($string);

	echo $valueLength . "<br />";


	$values = ['lorem',3243465,'Lorem ipsum',4357435, $string];

	$found = in_array($string, $values);

	if($found)
	{
		echo "Wow we did it together" . "<br />";
	} else{
		echo "We messed up, we could not find it" . "<br />";
	}

	$values = ['lorem',3243465,'Lorem ipsum',4357435];

	$found = in_array($string, $values);

	if($found)
	{
		echo "Wow we did it together";
	} else{
		echo "We messed up, we could not find it";
	}




/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>