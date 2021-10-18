<?php
interface ObservateurInterface
{
    public function mettreAJour(ObeserverInterface $sujet, array $donnees): void;
}