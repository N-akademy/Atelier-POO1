<?php

/* Fighter class definition */

class Fighter{
    private string $name;
    private int $strength;
    private int  $dexterity;
    public const MAX_LIFE = 100;
    private int $life = self::MAX_LIFE;

    public function __construct( string $name, int $strength,int $dexterity)
    {
         $this->name = $name;
         $this->strength = $strength;
         $this->dexterity = $dexterity;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }



    /**
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * @return int
     */
    public function setLife($life): int
    {
        return $this->life = $life;
    }
    //Le combattant va taper plus ou moins fort à chaque fois, le nombre de point de dégâts que fait l'**attaquant** sera donc un nombre aléatoire compris entre 1 et la force du combattant (utilise la fonction `rand()`

    public function fight($target)
    {
        //Choix au hasard de la force de combat
        $randFight = rand (1, $this->strength);
        //Calcule des dommages a infligé
        $damage = $randFight - $target->dexterity;


        //Si hazard inférieur à esquive pas de dommages
        if ($randFight < $target->dexterity) {
            return ('aucun perte de');
        }
            //Sinon calculer le restant de vie et fixer à target
            $restLife = $target->life - $damage;
            $target->setLife($restLife);

            return ($restLife);
    }
}

