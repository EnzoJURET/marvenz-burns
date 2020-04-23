<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image", indexes={@ORM\Index(name="image_slide_FK", columns={"id_slide"})})
 * @ORM\Entity
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_image", type="string", length=255, nullable=false)
     */
    private $lienImage;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_image", type="string", length=255, nullable=false)
     */
    private $altImage;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_image", type="string", length=255, nullable=false)
     */
    private $titreImage;

    /**
     * @var int
     *
     * @ORM\Column(name="numPlace_image", type="integer", nullable=false)
     */
    private $numplaceImage;

    /**
     * @var int
     *
     * @ORM\Column(name="valeurX_rec_debut", type="integer", nullable=false)
     */
    private $valeurxRecDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="valeurY_rec_debut", type="integer", nullable=false)
     */
    private $valeuryRecDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="valeurX_rec_fin", type="integer", nullable=false)
     */
    private $valeurxRecFin;

    /**
     * @var int
     *
     * @ORM\Column(name="valeurY_rec_fin", type="integer", nullable=false)
     */
    private $valeuryRecFin;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur_rec_debut", type="integer", nullable=false)
     */
    private $hauteurRecDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur_rec_fin", type="integer", nullable=false)
     */
    private $hauteurRecFin;

    /**
     * @var \Slide
     *
     * @ORM\ManyToOne(targetEntity="Slide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_slide", referencedColumnName="id_slide")
     * })
     */
    private $idSlide;

    public function getIdImage(): ?int
    {
        return $this->idImage;
    }

    public function getLienImage(): ?string
    {
        return $this->lienImage;
    }

    public function setLienImage(string $lienImage): self
    {
        $this->lienImage = $lienImage;

        return $this;
    }

    public function getAltImage(): ?string
    {
        return $this->altImage;
    }

    public function setAltImage(string $altImage): self
    {
        $this->altImage = $altImage;

        return $this;
    }

    public function getTitreImage(): ?string
    {
        return $this->titreImage;
    }

    public function setTitreImage(string $titreImage): self
    {
        $this->titreImage = $titreImage;

        return $this;
    }

    public function getNumplaceImage(): ?int
    {
        return $this->numplaceImage;
    }

    public function setNumplaceImage(int $numplaceImage): self
    {
        $this->numplaceImage = $numplaceImage;

        return $this;
    }

    public function getValeurxRecDebut(): ?int
    {
        return $this->valeurxRecDebut;
    }

    public function setValeurxRecDebut(int $valeurxRecDebut): self
    {
        $this->valeurxRecDebut = $valeurxRecDebut;

        return $this;
    }

    public function getValeuryRecDebut(): ?int
    {
        return $this->valeuryRecDebut;
    }

    public function setValeuryRecDebut(int $valeuryRecDebut): self
    {
        $this->valeuryRecDebut = $valeuryRecDebut;

        return $this;
    }

    public function getValeurxRecFin(): ?int
    {
        return $this->valeurxRecFin;
    }

    public function setValeurxRecFin(int $valeurxRecFin): self
    {
        $this->valeurxRecFin = $valeurxRecFin;

        return $this;
    }

    public function getValeuryRecFin(): ?int
    {
        return $this->valeuryRecFin;
    }

    public function setValeuryRecFin(int $valeuryRecFin): self
    {
        $this->valeuryRecFin = $valeuryRecFin;

        return $this;
    }

    public function getHauteurRecDebut(): ?int
    {
        return $this->hauteurRecDebut;
    }

    public function setHauteurRecDebut(int $hauteurRecDebut): self
    {
        $this->hauteurRecDebut = $hauteurRecDebut;

        return $this;
    }

    public function getHauteurRecFin(): ?int
    {
        return $this->hauteurRecFin;
    }

    public function setHauteurRecFin(int $hauteurRecFin): self
    {
        $this->hauteurRecFin = $hauteurRecFin;

        return $this;
    }

    public function getIdSlide(): ?Slide
    {
        return $this->idSlide;
    }

    public function setIdSlide(?Slide $idSlide): self
    {
        $this->idSlide = $idSlide;

        return $this;
    }


}
