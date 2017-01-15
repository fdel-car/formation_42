#!/usr/bin/php -n
<?php

//http://impotsurlerevenu.org/fonctionnement-de-l-impot/1164-bareme-impot-2017.php
$revenu = 160000; //personne seule, donc que 1 part fiscal

$revenu_net = 0;

if ($revenu < 9710)
{
	$revenu_net = $revenu;
}
else if ($revenu >= 9710 && $revenu < 26818)
{
	$revenu_net = $revenu - ($revenu - 9710) * 0.14;
}
else if ($revenu >= 26818 && $revenu < 71898)
{
	$revenu_net = $revenu - 0.14 * (26818 - 9170) - ($revenu - 26818) * 0.30;
}
else if ($revenu >= 71898 && $revenu < 152260)
{
	$revenu_net = $revenu - 0.14 * (26818 - 9170) - (71898 - 26818) * 0.30 - ($revenu - 71898) * 0.41;
}
else if ($revenu >= 152260)
{
	$revenu_net = $revenu - 0.14 * (26818 - 9170) - (71898 - 26818) * 0.30 - (152260 - 71898) * 0.41 - ($revenu - 152260) * 0.45;
}

echo $revenu_net;
?>
