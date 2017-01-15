#!/usr/bin/php -n
<?PHP
function nbr_is_odd ($x)
{
	if ($x % 2 === 1)
		return (TRUE);
	else
		return (FALSE);
}
if ($argc == 1)
{
	$limit = 100;
}
else
{
	$limit = intval($argv[1]);
}
$x = 0;
while ($x <= $limit)
{
	if (nbr_is_odd($x))
		echo($x."\n");
	$x++;
}
?>
