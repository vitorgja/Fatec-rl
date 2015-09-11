<?php


$numero="";
if(isset($_POST["numero"])){
	$numero=$_POST["numero"];
	$ant=0;
	$prox=1;
	$soma=0;
    for($i = 1; $i<=$numero; $i++){ 
		if($i==1){
			   echo $ant."<br>";
		}elseif($i==2){
			   echo $prox."<br>";
		}else{
               $soma=$ant+$prox;
               $ant=$prox;
               $prox=$soma;
			   echo $soma."<br>";
		}
	}
}
?>