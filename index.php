<?php
require 'src/Fighter.php';

// First Labour : Heracles vs Nemean Lion
// use your Fighter class here


$fighterOne = new Fighter('Hercules', 20, 6);
$fighterTwo = new Fighter('Lion de NÃŠmÃŠe',11,13);

$nameHero = $fighterOne->getName();
$nameMonster = $fighterTwo->getName();


$partie = 0;

//COMBAT BOUCLE WHILE


while( $fighterOne->getLife() > 0 && $fighterTwo->getLife() > 0){
    $round = $partie ++ ;
    echo 'đ Round '. $round;
    echo '<br>';
    echo 'đ§ '. $nameHero .' attaque đĻ '. $nameMonster;
    echo '<br>';
    echo  $fighterOne->fight($fighterTwo) .' points de vie đ Ã  đĻ '. $nameMonster ;
    echo '<br>';
    echo 'đĻ'. $nameMonster .' attaque đ§ '. $nameHero;
    echo '<br>';
    echo  $fighterTwo->fight($fighterOne)  .' points de vie đ Ã  đ§ '. $nameHero;
    echo '<br>';
};

if ($fighterOne->getLife() <=0){
    echo 'đ đ§ '. $nameHero . ' est mort';
    echo '<br>';
    echo 'đ Le vainqueur est đĻ '. $nameMonster ;
}elseif($fighterTwo->getLife() <=0){
    echo 'đ đ§ '. $nameMonster. ' est mort';
    echo '<br>';
    echo 'đ Le vainqueur est đ§ '. $nameHero ;
}

