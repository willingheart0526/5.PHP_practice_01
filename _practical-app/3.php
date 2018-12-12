<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if(1 < 10){

	echo"I love php";

} elseif(20 < 10){

	echo"blablabla";

} else{

	echo "WTF";

}

echo '<br />';

for($i = 0; $i < 10; $i++){

	echo $i . '<br />';

}

$value = 10;

switch($value){

	case 10:
	echo "this is 10 man";
	break;

	case 20:
	echo "this is 20 man";
	break;

	case 30:
	echo "this is 30 man";
	break;

	case 40:
	echo "this is 40 man";
	break;

	case 50:
	echo "this is 50 man";
	break;

	case 60:
	echo "this is 60 man";
	break;

	default :
    echo "we could not find anything";
    break;

}



/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>