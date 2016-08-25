<?

/*
This file will demonstrate the usage of phplycosquote.inc.php
*/
require_once "phpquote_com.inc.php";

$q=new php_lycosquote();

$ticker="MSFT";
$q->get_single_quote($ticker);

if (! $q) {
	die("Error while retrieving $ticker");
}
$last=$q->Last;
						
?>

Koers van <? echo $q->Symbol ?> is <?echo $q->Last; ?>.
