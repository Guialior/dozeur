<?php
header("Cache-Control: no-cache, must-revalidate");
header ('Content-type: text/html; charset"utf-8');


/*echo "TEST";
echo $force;


if( $_REQUEST["force"] )
{
   $force = $_REQUEST['force'];
   echo "Force ". $force;
}
   $force = $_REQUEST['force'];
   echo "Force ". $force;

   $endu = $_POST['endu'];
   echo "Endurrance ". $endu;*/

    /**
     * Nous créons deux variables : $username et $password qui valent respectivement "Sdz" et "salut"
     */

function dozerb($force,$endu,$ccm,$celer,$nbmanacol){
	$score = 10;

	$score = $score + ((($force * 6) + ($endu * 4)) - (($ccm * 2) * 5));

	$score = $score - ($nbmanacol*2);

if($celer == 1){
   echo " #Celerite ";
   $score = $score + ($force-$ccm) +3;
}
if($endu == 0){
   echo " Attention cette créature va mourrir dés son arrivé en jeu (même si elle est indestructible) ";
   $score = $score - 4;
}
	return $score;
}

function note($score){

	$note = 0;

	if($score < 0){
		echo "carte ok faible - Commune"; 
	}
	if(($score >= 0) && ($score <= 10)){
		echo "carte ok normal - Commune"; 
	}
	if(($score >= 11) && ($score <= 13)){
		echo "carte ok  bonne - Commune /faible - Unco"; 
	}
	if(($score >= 14) && ($score <= 20)){
		echo "carte ok normal - Unco"; 
	}
	if(($score >= 21) && ($score <= 30)){
		echo "carte ok normal - Rare"; 
	}
	if(($score >= 31) && ($score <= 40)){
		echo "carte a verif - RareMythique"; 
	}
	if($score >= 41){
		echo "carte a verif - Banni"; 
	}
	return $note;
}


    $force = 0;
    $endu = 0;
    $ccm = 0;

    $celer = 0;
    $nbmanacol = 0;

    $force = $_POST['force'];
    $endu = $_POST['endu'];
    $ccm = $_POST['ccm'];

    $nbmanacol =  $_POST['nbmanacol'];

$celer = $_POST['celer'];
echo $celer;

    if( isset($_POST['force']) && isset($_POST['endu']) && isset($_POST['ccm'])){

            echo "Analyse reussi yolo <br>";
            
            echo $force;       
echo "/";   
            echo $endu; 

            $score = dozerb($force,$endu,$ccm,$celer,$nbmanacol);
echo "<br>score de la carte";
            echo $score;
            echo "<br>note : ";
            note($score);
    }

?>