#!/usr/bin/php -n
<?php
function NbDePintes($sous)
{
	$prix = 7;
	$nb = $sous / $prix;
	return (intval($nb));
}

function Service($nom, $age, $sous)
{
	if ($age >= 18)
	{
		$nombreDePintes = NbDePintes($sous);
		echo "Bonjour ".$nom.", vous avez le droit a ".$nombreDePintes." pintes!\n";
	}
	else
	{
		echo "Bonjour, je ne peux vous servir puisque vous etes mineur..\n";
	}
}

Service("Legolas", 18, 300);

?>
