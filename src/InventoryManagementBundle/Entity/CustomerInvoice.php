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
     * @ORM\OneToOne(targetEntity="App\InventoryManagementBundle\Entity\Order",mappedBy="customerInvoice")
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaidAmount(): ?float
    {
        return $this->paidAmount;
    }

    public function setPaidAmount(float $paidAmount): self
    {
        $this->paidAmount = $paidAmount;

        return $this;
    }

    public function getReturnedAmount(): ?float
    {
        return $this->returnedAmount;
    }

    public function setReturnedAmount(float $returnedAmount): self
    {
        $this->returnedAmount = $returnedAmount;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?Order $order): self
    {
        // unset the owning side of the relation if necessary
        if ($order === null && $this->order !== null) {
            $this->order->setCustomerInvoice(null);
        }

        // set the owning side of the relation if necessary
        if ($order !== null && $order->getCustomerInvoice() !== $this) {
            $order->setCustomerInvoice($this);
        }

        $this->order = $order;

        return $this;
    }
}