<?php
$N1=$_GET['n1'];
$N2=$_GET['n2'];
$exp=$_GET['exp'];
$pot=0;
$potenciaN1=array();
$potenciaN2=array();

echo "Calcule la potencia de 2 numeros X";
echo "<br>";
echo "Potencia de Ambos Numeros";
echo "<br>";
echo "<br>";

for ($i=1; $i<=$exp; $i++) // Aqui se calculan Ambas portencias
 { 
	 $pot=pow($N1,$i);
	 $potenciaN1[$i]=$pot;
	
 }

for ($j=1; $j<=$exp ; $j++)
 { 
	 $pot=pow($N2,$j);
	 $potenciaN2[$j]=$pot;
	 
 }

 for ($i=1; $i<=$exp ; $i++) // Aqui se muestran
 { 
	 
	echo "las potencias de {$N1} a la {$i} potencia son ".$potenciaN1[$i];
	echo "<br>";
 }
 echo "<br>";

 for ($j=1; $j<=$exp; $j++) // Aqui se muestran
 { 
	 
	echo "las potencias de {$N2} a la {$j} potencia son ".$potenciaN2[$j];
	echo "<br>";
 }













?>