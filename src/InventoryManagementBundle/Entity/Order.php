<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_order")
 * @ORM\Entity()
 */
class Order
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
     * @var Cashier $cashier
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Cashier")
     */
    protected Cashier $cashier;

    /**
     * @var Employee $employee
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Employee")
     */
    protected Employee $employee;

    /**
     * @var float $total
     *
     * @ORM\Column(type="float")
     */
    protected float $total;

    /**
     * @var CustomerInvoice $customerInvoice
     *
     * @ORM\OneToMany(targetEntity="App\Entity\CustomerInvoice")
     */
    protected CustomerInvoice $customerInvoice;

}