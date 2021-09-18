<?php

	$quantidadeMinima=$_POST["txtcampo01"];
	$quantidadeMaxima=$_POST["txtcampo02"];	

	$estoqueMedio=($quantidadeMinima+$quantidadeMaxima)/2;

	
	echo("quantidade Minima:$quantidadeMinima<br>");
	echo("quantidade Maxima:$quantidadeMaxima<br>");
	echo("estoque Medio:$estoqueMedio<br>");

	?>
	
	

