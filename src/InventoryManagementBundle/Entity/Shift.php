<?php

namespace App\InventoryManagementBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_shift")
 * @ORM\Entity()
 */
class Shift
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
     * @var Employee $employee
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Employee")
     */
    protected Employee $employee;

    /**
     * @var DateTime $in
     *
     * @ORM\Column(type="datetime")
     */
    protected DateTime $in;

    /**
     * @var DateTime $out
     *
     * @ORM\Column(type="datetime")
     */
    protected DateTime $out;

    /**
     * @var Branch $branch
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Branch")
     */
    protected Branch $branch;

    /**
     * @var ?Cashier $cashier
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Cashier")
     * @ORM\Column(nullable=true)
     */
    protected ?Cashier $cashier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIn(): ?DateTime
    {
        return $this->in;
    }

    public function setIn(DateTime $in): self
    {
        $this->in = $in;

        return $this;
    }

    public function getOut(): ?DateTime
    {
        return $this->out;
    }

    public function setOut(DateTime $out): self
    {
        $this->out = $out;

        return $this;
    }

    public function getCashier(): ?string
    {
        return $this->cashier;
    }

    public function setCashier(?string $cashier): self
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

    public function getBranch(): ?Branch
    {
        return $this->branch;
    }

    public function setBranch(?Branch $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

}