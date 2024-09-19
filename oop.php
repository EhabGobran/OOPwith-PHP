<?php

class Trader{ 
private $winrate;
private $profit;
private $numberOFlosses;
private $numberOFwins;
public static $trader =13;
public function takeSellTrade(){
    echo "the sell trade took its place";
}
public function takeBuyTrade(){
    echo "the buy trade took its place";
}
public function getWinrate(){
    return $this->winrate;
}
public function setWinrate($value){
    $this->winrate=$value;
}
public function getTrader(){
    return Trader::$trader;
}


}

?>