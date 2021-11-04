<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 */
class Demande
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
    private $id_demande;

    /**
     * @ORM\Column(type="text")
     */
    private $type_demande;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaire;

    /**
     * @ORM\Column(type="text")
     */
    private $statut_demande;

    /**
     * @ORM\Column(type="text")
     */
    private $piece_jointes_demande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDemande(): ?int
    {
        return $this->id_demande;
    }

    public function setIdDemande(int $id_demande): self
    {
        $this->id_demande = $id_demande;

        return $this;
    }

    public function getTypeDemande(): ?string
    {
        return $this->type_demande;
    }

    public function setTypeDemande(string $type_demande): self
    {
        $this->type_demande = $type_demande;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getStatutDemande(): ?string
    {
        return $this->statut_demande;
    }

    public function setStatutDemande(string $statut_demande): self
    {
        $this->statut_demande = $statut_demande;

        return $this;
    }

    public function getPieceJointesDemande(): ?string
    {
        return $this->piece_jointes_demande;
    }

    public function setPieceJointesDemande(string $piece_jointes_demande): self
    {
        $this->piece_jointes_demande = $piece_jointes_demande;

        return $this;
    }
}
