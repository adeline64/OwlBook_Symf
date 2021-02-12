<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivreRepository::class)
 */
class Livre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sous_titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $isbn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nb_page;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="livres")
     */
    private $Etat;

    /**
     * @ORM\ManyToOne(targetEntity=Edition::class, inversedBy="livres")
     */
    private $Edition;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="livres")
     */
    private $Categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Langue::class, inversedBy="livres")
     */
    private $Langue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSousTitre(): ?string
    {
        return $this->sous_titre;
    }

    public function setSousTitre(string $sous_titre): self
    {
        $this->sous_titre = $sous_titre;

        return $this;
    }

    public function getTome(): ?string
    {
        return $this->tome;
    }

    public function setTome(string $tome): self
    {
        $this->tome = $tome;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getNbPage(): ?string
    {
        return $this->nb_page;
    }

    public function setNbPage(string $nb_page): self
    {
        $this->nb_page = $nb_page;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->Etat;
    }

    public function setEtat(?Etat $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getEdition(): ?Edition
    {
        return $this->Edition;
    }

    public function setEdition(?Edition $Edition): self
    {
        $this->Edition = $Edition;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categorie $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getLangue(): ?Langue
    {
        return $this->Langue;
    }

    public function setLangue(?Langue $Langue): self
    {
        $this->Langue = $Langue;

        return $this;
    }
}
