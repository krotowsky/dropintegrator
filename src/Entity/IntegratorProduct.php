<?php

namespace App\Entity;

use App\Repository\IntegratorProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IntegratorProductRepository::class)
 */
class IntegratorProduct
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProductCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ean;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Producer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Cat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $PriceBase;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Tax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $PriceMin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Promo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Availability;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Weight;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductCode(): ?string
    {
        return $this->ProductCode;
    }

    public function setProductCode(string $ProductCode): self
    {
        $this->ProductCode = $ProductCode;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->Ean;
    }

    public function setEan(string $Ean): self
    {
        $this->Ean = $Ean;

        return $this;
    }

    public function getProducer(): ?string
    {
        return $this->Producer;
    }

    public function setProducer(?string $Producer): self
    {
        $this->Producer = $Producer;

        return $this;
    }

    public function getCat(): ?string
    {
        return $this->Cat;
    }

    public function setCat(?string $Cat): self
    {
        $this->Cat = $Cat;

        return $this;
    }

    public function getPriceBase(): ?string
    {
        return $this->PriceBase;
    }

    public function setPriceBase(?string $PriceBase): self
    {
        $this->PriceBase = $PriceBase;

        return $this;
    }

    public function getTax(): ?string
    {
        return $this->Tax;
    }

    public function setTax(?string $Tax): self
    {
        $this->Tax = $Tax;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(?string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getPriceMin(): ?string
    {
        return $this->PriceMin;
    }

    public function setPriceMin(?string $PriceMin): self
    {
        $this->PriceMin = $PriceMin;

        return $this;
    }

    public function getPromo(): ?string
    {
        return $this->Promo;
    }

    public function setPromo(?string $Promo): self
    {
        $this->Promo = $Promo;

        return $this;
    }

    public function getStock(): ?string
    {
        return $this->stock;
    }

    public function setStock(?string $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->Availability;
    }

    public function setAvailability(?string $Availability): self
    {
        $this->Availability = $Availability;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->Weight;
    }

    public function setWeight(?string $Weight): self
    {
        $this->Weight = $Weight;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }
}
