<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_employee")
 * @ORM\Entity()
 */
class Employee
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
     * @var string $englishName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $englishName;

    /**
     * @var string $arabicName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $arabicName;

    /**
     * @var int $phoneNumber
     *
     * @ORM\Column(type="integer", length=64)
     */
    protected int $phoneNumber;

    /**
     * @var Address $address
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Address")
     */
    protected Address $address;

    /**
     * @var int $gender
     *
     * @ORM\Column(type="integer")
     */
    protected int $gender;

    /**
     * @var int $relationShipStatus
     *
     * @ORM\Column(type="integer")
     */
    protected int $relationShipStatus;

    /**
     * @var int $nationality
     *
     * @ORM\Column(type="integer")
     */
    protected int $nationality;

    /**
     * @var int $employeeStatus
     *
     * @ORM\Column(type="integer")
     */
    protected int $employeeStatus;


    /**
     * @var string $DOB
     *
     * @ORM\Column(type="string")
     */
    protected string $DOB;

    /**
     * @var string $dateOfJoin
     *
     * @ORM\Column(type="string")
     */
    protected string $dateOfJoin;

    /**
     * @var string $designation
     *
     * @ORM\Column(type="string")
     */
    protected string $designation;

    /**
     * @var Branch $branch
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Branch")
     */
    protected Branch $branch;

    /**
     * @var string $terminationDate
     *
     * @ORM\Column(type="string")
     */
    protected string $terminationDate;
}