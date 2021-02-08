<?php

include "./classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();
$perso->name = "Sam";
echo $perso->name;

echo"<br><br>";



$perso2 = new personnage();
$perso2->new = "Robert";
echo $perso2->new;



$perso->walkRight();
$perso->walkLeft();
$perso->walkTop();
$perso->walkBottom();
