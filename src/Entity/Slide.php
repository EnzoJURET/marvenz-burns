<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slide
 *
 * @ORM\Table(name="slide")
 * @ORM\Entity
 */
class Slide
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_slide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSlide;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_slide", type="string", length=255, nullable=false)
     */
    private $titreSlide;

    public function getIdSlide(): ?int
    {
        return $this->idSlide;
    }

    public function getTitreSlide(): ?string
    {
        return $this->titreSlide;
    }

    public function setTitreSlide(string $titreSlide)
    {
        $this->titreSlide = $titreSlide;

        return $this;
    }


}
