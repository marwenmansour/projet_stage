<?php

namespace App\Entity;

use App\Repository\EncaissementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EncaissementRepository::class)
 */
class Encaissement
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
    private $id_transaction;

    /**
     * @ORM\Column(type="date")
     */
    private $date_transaction;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_encaisse;

    /**
     * @ORM\Column(type="text")
     */
    private $moyent_payement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTransaction(): ?int
    {
        return $this->id_transaction;
    }

    public function setIdTransaction(int $id_transaction): self
    {
        $this->id_transaction = $id_transaction;

        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->date_transaction;
    }

    public function setDateTransaction(\DateTimeInterface $date_transaction): self
    {
        $this->date_transaction = $date_transaction;

        return $this;
    }

    public function getMontantEncaisse(): ?float
    {
        return $this->montant_encaisse;
    }

    public function setMontantEncaisse(float $montant_encaisse): self
    {
        $this->montant_encaisse = $montant_encaisse;

        return $this;
    }

    public function getMoyentPayement(): ?string
    {
        return $this->moyent_payement;
    }

    public function setMoyentPayement(string $moyent_payement): self
    {
        $this->moyent_payement = $moyent_payement;

        return $this;
    }
}
