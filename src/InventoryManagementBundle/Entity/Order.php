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
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Cashier")
     */
    protected Cashier $cashier;

    /**
     * @var Employee $employee
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Employee")
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
     * @ORM\OneToOne(targetEntity="App\InventoryManagementBundle\Entity\CustomerInvoice",mappedBy="order")
     */
    protected CustomerInvoice $customerInvoice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getCashier(): ?Cashier
    {
        return $this->cashier;
    }

    public function setCashier(?Cashier $cashier): self
    {
        $this->cashier = $cashier;

        return $this;
    }

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): self
    {
        $this->employee = $employee;

        return $this;
    }

    public function getCustomerInvoice(): ?CustomerInvoice
    {
        return $this->customerInvoice;
    }

    public function setCustomerInvoice(?CustomerInvoice $customerInvoice): self
    {
        // unset the owning side of the relation if necessary
        if ($customerInvoice === null && $this->customerInvoice !== null) {
            $this->customerInvoice->setOrder(null);
        }

        // set the owning side of the relation if necessary
        if ($customerInvoice !== null && $customerInvoice->getOrder() !== $this) {
            $customerInvoice->setOrder($this);
        }

        $this->customerInvoice = $customerInvoice;

        return $this;
    }

}