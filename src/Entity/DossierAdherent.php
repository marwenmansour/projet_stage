<?php

namespace App\Entity;

use App\Repository\DossierAdherentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DossierAdherentRepository::class)
 */
class DossierAdherent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_dossier;

    /**
     * @ORM\Column(type="text")
     */
    private $libelle_dossier;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation_dossier;

    /**
     * @ORM\Column(type="text")
     */
    private $activite_dossier;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_pro_dossier;

    /**
     * @ORM\Column(type="text")
     */
    private $statut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDossier(): ?int
    {
        return $this->id_dossier;
    }

    public function setIdDossier(int $id_dossier): self
    {
        $this->id_dossier = $id_dossier;

        return $this;
    }

    public function getLibelleDossier(): ?string
    {
        return $this->libelle_dossier;
    }

    public function setLibelleDossier(string $libelle_dossier): self
    {
        $this->libelle_dossier = $libelle_dossier;

        return $this;
    }

    public function getDateCreationDossier(): ?\DateTimeInterface
    {
        return $this->date_creation_dossier;
    }

    public function setDateCreationDossier(\DateTimeInterface $date_creation_dossier): self
    {
        $this->date_creation_dossier = $date_creation_dossier;

        return $this;
    }

    public function getActiviteDossier(): ?string
    {
        return $this->activite_dossier;
    }

    public function setActiviteDossier(string $activite_dossier): self
    {
        $this->activite_dossier = $activite_dossier;

        return $this;
    }

    public function getAdresseProDossier(): ?string
    {
        return $this->adresse_pro_dossier;
    }

    public function setAdresseProDossier(string $adresse_pro_dossier): self
    {
        $this->adresse_pro_dossier = $adresse_pro_dossier;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
