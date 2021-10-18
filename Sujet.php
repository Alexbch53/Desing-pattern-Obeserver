<?php

class Sujet implements SujetInterface
{
    private $nouvelles;
 
    private $observateurs;
     
    public function attacher(ObservateurInterface $observateur): void
    {
        $this->observateurs[] = $observateur;
    }
  
    public function detacher(ObservateurInterface $observateur): void
    {
        $key = array_search($observateur, $this->observateurs);
  
        if (false !== $key) {
            unset($this->observateurs[$key]);
        }
    }
  
    public function notifier(): void 
    {
        foreach ($this->observateurs as $observateur) {
            $observateur->mettreAJour($this);
        }
    }
 
    public function mettreAJourLesNouvelles(string $nouvelles): void 
    {
        $this->nouvelles = $nouvelles;
        $this->notifier();
    }
     
    public function donnerLesNouvelles(): string 
    {
        return $this->nouvelles;
    }

    public function notifier(): void 
    {
    foreach ($this->observateurs as $observateur) {
        $observateur->mettreAJour($this, ["nouvelles" => $this->nouvelles]);
        }
    }

    public function mettreAJour(SujetInterface $sujet, array $donnees): void
    {
    $this->dernieresNouvelles = $donnees["nouvelles"];
        }
    }

