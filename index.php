<?php

$mg = new Megacasting();

$partener1 = new Partner();
$partener1->setName("Partenaire 1");
$mg->attache($partener1);

$partener1 = new Partner();
$partener1->setName("Partenaire 2");
$mg->attache($partener2);

$partener1 = new Partner();
$partener1->setName("Partenaire 3");
$mg->attache($partener3);

$mg->addCasting(new Casting("Nouveau Casting"));

?>