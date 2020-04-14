<?php

require_once 'Modele/Billet.php';

$tstBillet = new Billet;
$billets = $tstBillet->getBillets();

var_dump($billets->rowCount());

$billet =  $tstBillet->getBillet(1);

var_dump($billet);