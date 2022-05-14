<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_customerInvoice")
 * @ORM\Entity()
 */
class CustomerInvoice
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
     * @var Order $order
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Order")
     */
    protected order $order;

    /**
     * @var float $paidAmount
     *
     * @ORM\Column(type="float")
     */
    protected float $paidAmount;

    /**
     * @var float $returnedAmount
     *
     * @ORM\Column(type="float")
     */
    protected float $returnedAmount;
}