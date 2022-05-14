<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_supplierInvoice")
 * @ORM\Entity()
 */
class SupplierInvoice
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
     * @var Supplier $supplier
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Supplier")
     */
    protected Supplier $supplier;

    /**
     * @var ArrayCollection $inventories
     *
     * @ORM\OneToMany(targetEntity="App\InventoryManagementBundle\Entity\Inventory",mappedBy="supplierInvoice")
     */
    protected iterable $inventories;

    /**
     * @var string $productInvoice
     *
     * @ORM\Column(type="string")
     */
    protected string $productInvoice;

    public function __construct()
    {
        $this->inventories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductInvoice(): ?string
    {
        return $this->productInvoice;
    }

    public function setProductInvoice(string $productInvoice): self
    {
        $this->productInvoice = $productInvoice;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): self
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * @return Collection<int, Inventory>
     */
    public function getInventories(): Collection
    {
        return $this->inventories;
    }

    public function addInventory(Inventory $inventory): self
    {
        if (!$this->inventories->contains($inventory)) {
            $this->inventories[] = $inventory;
            $inventory->setSupplierInvoice($this);
        }

        return $this;
    }

    public function removeInventory(Inventory $inventory): self
    {
        if ($this->inventories->removeElement($inventory)) {
            // set the owning side to null (unless already changed)
            if ($inventory->getSupplierInvoice() === $this) {
                $inventory->setSupplierInvoice(null);
            }
        }

        return $this;
    }
}