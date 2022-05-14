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
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Product")
     */
    protected Product $product;

    /**
     * @var Order $order
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Order")
     */
    protected Order $order;

    /**
     * @var ?float $weight
     *
     * @ORM\Column(type="float",nullable=true)
     */
    protected ?float $weight = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?Order $order): self
    {
        $this->order = $order;

        return $this;
    }
}