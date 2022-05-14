<?php

namespace App\InventoryManagementBundle\Entity;

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
     * @ORM\OneToMany(targetEntity="App\Entity\Product")
     */
    protected Product $product;

    /**
     * @var float $quantity
     *
     * @ORM\Column(type="float")
     */
    protected float $quantity;

    /**
     * @var float $weight
     *
     * @ORM\Column(type="float")
     */
    protected float $weight;

    /**
     * @var string $importDate
     *
     * @ORM\Column(type="string")
     */
    protected string $importDate;

    /**
     * @var Supplier $supplier
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Supplier")
     */
    protected Supplier $supplier;

    /**
     * @var string $expiryDate
     *
     * @ORM\Column(type="string")
     */
    protected string $expiryDate;

    /**
     * @var SupplierInvoice $supplierInvoice
     *
     * @ORM\OneToMany(targetEntity="App\Entity\SupplierInvoice")
     */
    protected SupplierInvoice $supplierInvoice;

    /**
     * @var Branch $branch
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Branch")
     */
    protected branch $branch;
}