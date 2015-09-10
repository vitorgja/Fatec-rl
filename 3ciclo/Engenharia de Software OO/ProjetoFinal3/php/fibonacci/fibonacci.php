<?php


$numero="";
if(isset($_POST["numero"])){
	$numero=$_POST["numero"];
	$ant=0;
	$prox=1;
	$soma=0;
	$acumulador="";
    for($i = 1; $i<=$numero; $i++){ 
		if($i==1){
			   $acumulador=$acumulador.$ant.", ";
		}elseif($i==2){
			   $acumulador=$acumulador.$prox.", ";
		}else{
               $soma=$ant+$prox;
               $ant=$prox;
               $prox=$soma;
			   $acumulador=$acumulador.$soma.", ";
		}
	}
	echo substr($acumulador,0,-2).".";
}
?>