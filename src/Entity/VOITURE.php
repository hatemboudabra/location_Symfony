<?php

namespace App\Entity;

use App\Repository\VOITURERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VOITURERepository::class)]
class VOITURE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $serie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_mise_circulation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Modele = null;

    #[ORM\Column]
    private ?float $prix_jour = null;

    #[ORM\OneToMany(mappedBy: 'vOITURE', targetEntity: Location::class)]
    private Collection $Relation;

    public function __construct()
    {
        $this->Relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSerie(): ?int
    {
        return $this->serie;
    }

    public function setSerie(int $serie): static
    {
        $this->serie = $serie;

        return $this;
    }

    public function getDateMiseCirculation(): ?\DateTimeInterface
    {
        return $this->date_mise_circulation;
    }

    public function setDateMiseCirculation(?\DateTimeInterface $date_mise_circulation): static
    {
        $this->date_mise_circulation = $date_mise_circulation;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->Modele;
    }

    public function setModele(?string $Modele): static
    {
        $this->Modele = $Modele;

        return $this;
    }

    public function getPrixJour(): ?float
    {
        return $this->prix_jour;
    }

    public function setPrixJour(float $prix_jour): static
    {
        $this->prix_jour = $prix_jour;

        return $this;
    }

    /**
     * @return Collection<int, Location>
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(Location $relation): static
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation->add($relation);
            $relation->setVOITURE($this);
        }

        return $this;
    }

    public function removeRelation(Location $relation): static
    {
        if ($this->Relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getVOITURE() === $this) {
                $relation->setVOITURE(null);
            }
        }

        return $this;
    }
}
