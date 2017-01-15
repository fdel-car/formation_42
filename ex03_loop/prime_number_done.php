#!/usr/bin/php -n
<?PHP
function nbr_is_prime ($x)
{
	$iter = $x - 1;
	while ($iter > 1)
	{
		if (($x % $iter) == 0)
			return (FALSE);
		$iter--;
	}
	return (TRUE);
}
if ($argc == 1)
{
	$limit = 100;
}
else
{
	$limit = intval($argv[1]);
}
$x = 2;
while ($x <= $limit)
{
	if (nbr_is_prime($x))
		echo($x."\n");
	$x++;
}
?>
