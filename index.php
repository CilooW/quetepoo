<?php

require 'Personne.php';

$celine = new Personne ("Celine");

$celine->setAdresse("3 rue des capucines");

$celine->setNaissance("04/23/1990");

$celine->personne();

echo $celine->naissance."<br>";

$celine->age($celine->naissance);






