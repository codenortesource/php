<?php

//codenorte.com
$contadorletraAdenaTexto = "php es un lenguaje de programación que se ejecuta en el servidor";
$contadorletraA=0;
$contadorletraB=0;
$contadorletraC=0;
for($i=0 ; $i<strlen($contadorletraAdenaTexto);$i++){
	if(substr($contadorletraAdenaTexto,$i,1)=="a"){
		$contadorletraA++;
	}
	if(substr($contadorletraAdenaTexto,$i,1)=="b"){
		$contadorletraB++;
	}
	if(substr($contadorletraAdenaTexto,$i,1)=="c"){
		$contadorletraC++;
	}
}
echo "".$contadorletraAdenaTexto.'<br>';

echo "a: ".$contadorletraA.'<br>';
echo "b: ".$contadorletraB.'<br>';
echo "c: ".$contadorletraC.'<br>';

?>
