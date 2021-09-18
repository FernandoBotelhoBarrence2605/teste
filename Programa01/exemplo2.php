
<?php

	$nome=$_POST["txtnome"];
	$nota01=$_POST["txtcampo01"];
	$nota02=$_POST["txtcampo02"];
	$nota03=$_POST["txtcampo03"];
	$nota04=$_POST["txtcampo04"];

	$media=($nota01+$nota02+$nota03+$nota04)/4;

	echo("Boletim de $nome<br>");
	echo("1 Bim: $nota01<br>");
	echo("2 Bim: $nota02<br>");
	echo("3 Bim: $nota03<br>");
	echo("4 Bim: $nota04<br>");
	echo("média:$media<br>");
	

if($media>=6) {
	echo("Prof. Augusto perdeu!!$nome Foi Aprovado(a)");
}else{
	echo("Prof. Augusto ganhou!!$nome Foi Reprovado(a)");
}
		
?>