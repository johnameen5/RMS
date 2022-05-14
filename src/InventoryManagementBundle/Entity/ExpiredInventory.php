<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_expiredInventory")
 * @ORM\Entity()
 */
class ExpiredInventory
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
     * @var Inventory $inventory
     *
     * @ORM\OneToOne(targetEntity="App\InventoryManagementBundle\Entity\Inventory",mappedBy="expiredInventory")
     */
    protected Inventory $inventory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventory(): ?Inventory
    {
        return $this->inventory;
    }

    public function setInventory(?Inventory $inventory): self
    {
        // unset the owning side of the relation if necessary
        if ($inventory === null && $this->inventory !== null) {
            $this->inventory->setExpiredInventory(null);
        }

        // set the owning side of the relation if necessary
        if ($inventory !== null && $inventory->getExpiredInventory() !== $this) {
            $inventory->setExpiredInventory($this);
        }

        $this->inventory = $inventory;

        return $this;
    }
}