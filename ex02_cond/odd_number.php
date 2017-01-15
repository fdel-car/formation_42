#!/usr/bin/php -n
<?PHP
function nbr_is_odd ($x)
{
	...
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
	if (...)
		echo($x."\n");
	$x++;
}
?>
