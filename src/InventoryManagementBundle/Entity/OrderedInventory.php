<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_orderedInventory")
 * @ORM\Entity()
 */
class OrderedInventory
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
     * @ORM\OneToMany(targetEntity="App\Entity\Supplier")
     */
    protected Supplier $supplier;

    /**
     * @var Inventory $inventory
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Supplier")
     */
    protected Inventory $inventory;
}