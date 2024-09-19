<?php 
require_once 'oop.php';

$Ehab=new Trader();

$Ehab->setWinrate("80%");
echo $Ehab->getTrader();

?>