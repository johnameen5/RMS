<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_supplier")
 * @ORM\Entity()
 */
class Supplier
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
     * @var Address $address
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Address")
     */
    protected Address $address;

    /**
     * @var int $phoneNumber
     *
     * @ORM\Column(type="integer")
     */
    protected int $phoneNumber;
}