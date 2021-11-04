<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionRepository::class)
 */
class Intervention
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
    private $id_intervention;

    /**
     * @ORM\Column(type="date")
     */
    private $date_intervention;

    /**
     * @ORM\Column(type="text")
     */
    private $statut_intervention;

    /**
     * @ORM\Column(type="text")
     */
    private $rapport_intervention;

    /**
     * @ORM\Column(type="text")
     */
    private $pieces_jointes_intervention;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdIntervention(): ?int
    {
        return $this->id_intervention;
    }

    public function setIdIntervention(int $id_intervention): self
    {
        $this->id_intervention = $id_intervention;

        return $this;
    }

    public function getDateIntervention(): ?\DateTimeInterface
    {
        return $this->date_intervention;
    }

    public function setDateIntervention(\DateTimeInterface $date_intervention): self
    {
        $this->date_intervention = $date_intervention;

        return $this;
    }

    public function getStatutIntervention(): ?string
    {
        return $this->statut_intervention;
    }

    public function setStatutIntervention(string $statut_intervention): self
    {
        $this->statut_intervention = $statut_intervention;

        return $this;
    }

    public function getRapportIntervention(): ?string
    {
        return $this->rapport_intervention;
    }

    public function setRapportIntervention(string $rapport_intervention): self
    {
        $this->rapport_intervention = $rapport_intervention;

        return $this;
    }

    public function getPiecesJointesIntervention(): ?string
    {
        return $this->pieces_jointes_intervention;
    }

    public function setPiecesJointesIntervention(string $pieces_jointes_intervention): self
    {
        $this->pieces_jointes_intervention = $pieces_jointes_intervention;

        return $this;
    }
}
