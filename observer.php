<?php

class Observateur implements ObservateurInterface
{
    private $news;
     
    public function mettreAJour(ObeserverInterface $observer): void
    {
        $this->new = $observer->sendNews();
    }
}