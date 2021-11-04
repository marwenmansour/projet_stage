<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratRepository::class)
 */
class Contrat
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
    private $id_contrat;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation_contrat;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_contrat;

    /**
     * @ORM\Column(type="date")
     */
    private $date_signature;

    /**
     * @ORM\Column(type="text")
     */
    private $pdf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdContrat(): ?int
    {
        return $this->id_contrat;
    }

    public function setIdContrat(int $id_contrat): self
    {
        $this->id_contrat = $id_contrat;

        return $this;
    }

    public function getDateCreationContrat(): ?\DateTimeInterface
    {
        return $this->date_creation_contrat;
    }

    public function setDateCreationContrat(\DateTimeInterface $date_creation_contrat): self
    {
        $this->date_creation_contrat = $date_creation_contrat;

        return $this;
    }

    public function getMontantContrat(): ?float
    {
        return $this->montant_contrat;
    }

    public function setMontantContrat(float $montant_contrat): self
    {
        $this->montant_contrat = $montant_contrat;

        return $this;
    }

    public function getDateSignature(): ?\DateTimeInterface
    {
        return $this->date_signature;
    }

    public function setDateSignature(\DateTimeInterface $date_signature): self
    {
        $this->date_signature = $date_signature;

        return $this;
    }

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): self
    {
        $this->pdf = $pdf;

        return $this;
    }
}
