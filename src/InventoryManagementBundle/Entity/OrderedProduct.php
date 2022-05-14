<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_orderedProduct")
 * @ORM\Entity()
 */
class OrderedProduct
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
     * @var Order $order
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Order")
     */
    protected Order $order;

    /**
     * @var float $weight
     *
     * @ORM\Column(type="float")
     */
    protected float $weight;
}