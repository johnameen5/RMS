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
     * @ORM\OneToMany(targetEntity="App\Entity\Supplier")
     */
    protected Inventory $inventory;
}