<?php

namespace App\InventoryManagementBundle\Entity;

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
     * @ORM\OneToMany(targetEntity="App\Entity\Employee")
     */
    protected Employee $employee;

    /**
     * @var string $in
     *
     * @ORM\Column(type="string")
     */
    protected string $in;

    /**
     * @var string $out
     *
     * @ORM\Column(type="string")
     */
    protected string $out;

    /**
     * @var Branch $branch
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Branch")
     */
    protected Branch $branch;

    /**
     * @var Cashier $cashier
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Cashier")
     */
    protected Cashier $cashier;
}