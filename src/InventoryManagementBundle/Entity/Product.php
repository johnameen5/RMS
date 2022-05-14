<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_product")
 * @ORM\Entity()
 */
class Product
{
    /**
     * @var int $id
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @var Category $category
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Category")
     */
    protected Category $category;

    /**
     * @var float $price
     *
     * @ORM\Column(type="float")
     */
    protected float $price;

    /**
     * @var string $englishName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $englishName;

    /**
     * @var string $arabicName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $arabicName;

    /**
     * @var int $type
     *
     * @ORM\Column(type="integer")
     */
    protected int $type;

    /**
     * @var ?float $reorderQuantity
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $reorderQuantity = null;

    /**
     * @var ?float $reorderWeight
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $reorderWeight = null;

    /**
     * @var ?float $chargeableWeight
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $chargeableWeight = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getEnglishName(): ?string
    {
        return $this->englishName;
    }

    public function setEnglishName(string $englishName): self
    {
        $this->englishName = $englishName;

        return $this;
    }

    public function getArabicName(): ?string
    {
        return $this->arabicName;
    }

    public function setArabicName(string $arabicName): self
    {
        $this->arabicName = $arabicName;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getReorderQuantity(): ?float
    {
        return $this->reorderQuantity;
    }

    public function setReorderQuantity(?float $reorderQuantity): self
    {
        $this->reorderQuantity = $reorderQuantity;

        return $this;
    }

    public function getReorderWeight(): ?float
    {
        return $this->reorderWeight;
    }

    public function setReorderWeight(?float $reorderWeight): self
    {
        $this->reorderWeight = $reorderWeight;

        return $this;
    }

    public function getChargeableWeight(): ?float
    {
        return $this->chargeableWeight;
    }

    public function setChargeableWeight(?float $chargeableWeight): self
    {
        $this->chargeableWeight = $chargeableWeight;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}