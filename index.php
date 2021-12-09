<?php
require 'src/Fighter.php';

// First Labour : Heracles vs Nemean Lion
// use your Fighter class here


$fighterOne = new Fighter('Hercules', 20, 6);
$fighterTwo = new Fighter('Lion de Némée',11,13);

$nameHero = $fighterOne->getName();
$nameMonster = $fighterTwo->getName();


$partie = 0;

//COMBAT BOUCLE WHILE


while( $fighterOne->getLife() > 0 && $fighterTwo->getLife() > 0){
    $round = $partie ++ ;
    echo '🕛 Round '. $round;
    echo '<br>';
    echo '🧔 '. $nameHero .' attaque 🦁 '. $nameMonster;
    echo '<br>';
    echo  $fighterOne->fight($fighterTwo) .' points de vie 💙 à 🦁 '. $nameMonster ;
    echo '<br>';
    echo '🦁'. $nameMonster .' attaque 🧔 '. $nameHero;
    echo '<br>';
    echo  $fighterTwo->fight($fighterOne)  .' points de vie 💙 à 🧔 '. $nameHero;
    echo '<br>';
};

if ($fighterOne->getLife() <=0){
    echo '💀 🧔 '. $nameHero . ' est mort';
    echo '<br>';
    echo '🏆 Le vainqueur est 🦁 '. $nameMonster ;
}elseif($fighterTwo->getLife() <=0){
    echo '💀 🧔 '. $nameMonster. ' est mort';
    echo '<br>';
    echo '🏆 Le vainqueur est 🧔 '. $nameHero ;
}

