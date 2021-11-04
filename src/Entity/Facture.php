<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
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
    private $id_facture;

    /**
     * @ORM\Column(type="date")
     */
    private $date_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_total_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $reste_a_paye;

    /**
     * @ORM\Column(type="text")
     */
    private $pdf_facture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFacture(): ?int
    {
        return $this->id_facture;
    }

    public function setIdFacture(int $id_facture): self
    {
        $this->id_facture = $id_facture;

        return $this;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->date_facture;
    }

    public function setDateFacture(\DateTimeInterface $date_facture): self
    {
        $this->date_facture = $date_facture;

        return $this;
    }

    public function getMontantTotalFacture(): ?float
    {
        return $this->montant_total_facture;
    }

    public function setMontantTotalFacture(float $montant_total_facture): self
    {
        $this->montant_total_facture = $montant_total_facture;

        return $this;
    }

    public function getResteAPaye(): ?float
    {
        return $this->reste_a_paye;
    }

    public function setResteAPaye(float $reste_a_paye): self
    {
        $this->reste_a_paye = $reste_a_paye;

        return $this;
    }

    public function getPdfFacture(): ?string
    {
        return $this->pdf_facture;
    }

    public function setPdfFacture(string $pdf_facture): self
    {
        $this->pdf_facture = $pdf_facture;

        return $this;
    }
}
