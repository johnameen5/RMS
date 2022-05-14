<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_cashier")
 * @ORM\Entity()
 */
class Cashier
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
     * @ORM\OneToMany(targetEntity="App\Entity\Employee")
     */
    protected Employee $employee;

    /**
     * @var Branch $branch
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Branch")
     */
    protected Branch $branch;

    /**
     * @var Shift $shift
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Shift")
     */
    protected Shift $shift;
}