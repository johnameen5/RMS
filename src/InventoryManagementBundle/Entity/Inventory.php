<?php

namespace App\InventoryManagementBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_inventory")
 * @ORM\Entity()
 */
class Inventory
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
     * @var Product $product
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Product")
     */
    protected Product $product;

    /**
     * @var ?float $quantity
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $quantity = null;

    /**
     * @var ?float $boughtQuantity
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $boughtQuantity = null;

    /**
     * @var ?float $weight
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $weight = null;

    /**
     * @var ?float $boughtWeight
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $boughtWeight = null;

    /**
     * @var DateTime $importDate
     *
     * @ORM\Column(type="date")
     */
    protected DateTime $importDate;

    /**
     * @var DateTime $expiryDate
     *
     * @ORM\Column(type="date")
     */
    protected DateTime $expiryDate;

    /**
     * @var SupplierInvoice $supplierInvoice
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\SupplierInvoice",inversedBy="inventories")
     */
    protected SupplierInvoice $supplierInvoice;

    /**
     * @var Branch $branch
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Branch")
     */
    protected branch $branch;

    /**
     * @var ExpiredInventory $expiredInventory
     *
     * @ORM\OneToOne(targetEntity="App\InventoryManagementBundle\Entity\ExpiredInventory",inversedBy="inventory")
     */
    protected ExpiredInventory $expiredInventory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getBoughtQuantity(): ?float
    {
        return $this->boughtQuantity;
    }

    public function setBoughtQuantity(?float $boughtQuantity): self
    {
        $this->boughtQuantity = $boughtQuantity;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getBoughtWeight(): ?float
    {
        return $this->boughtWeight;
    }

    public function setBoughtWeight(?float $boughtWeight): self
    {
        $this->boughtWeight = $boughtWeight;

        return $this;
    }

    public function getImportDate(): ?DateTime
    {
        return $this->importDate;
    }

    public function setImportDate(DateTime $importDate): self
    {
        $this->importDate = $importDate;

        return $this;
    }

    public function getExpiryDate(): ?DateTime
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(DateTime $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getSupplierInvoice(): ?SupplierInvoice
    {
        return $this->supplierInvoice;
    }

    public function setSupplierInvoice(?SupplierInvoice $supplierInvoice): self
    {
        $this->supplierInvoice = $supplierInvoice;

        return $this;
    }

    public function getBranch(): ?Branch
    {
        return $this->branch;
    }

    public function setBranch(?Branch $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    public function getExpiredInventory(): ?ExpiredInventory
    {
        return $this->expiredInventory;
    }

    public function setExpiredInventory(?ExpiredInventory $expiredInventory): self
    {
        // unset the owning side of the relation if necessary
        if ($expiredInventory === null && $this->expiredInventory !== null) {
            $this->expiredInventory->setInventory(null);
        }

        // set the owning side of the relation if necessary
        if ($expiredInventory !== null && $expiredInventory->getInventory() !== $this) {
            $expiredInventory->setInventory($this);
        }

        $this->expiredInventory = $expiredInventory;

        return $this;
    }
}