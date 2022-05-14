<?php

namespace App\InventoryManagementBundle\Entity;

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
     * @ORM\OneToMany(targetEntity="App\Entity\Supplier")
     */
    protected Supplier $supplier;

    /**
     * @var string $productInvoice
     *
     * @ORM\Column(type="string")
     */
    protected string $producrInvoice;
}