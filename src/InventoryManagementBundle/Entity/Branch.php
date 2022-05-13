<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_branch")
 * @ORM\Entity()
 */
class Branch
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
     * @var Company $company
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Company")
     */
    protected Company $company;

    /**
     * @var Address $address
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Address")
     */
    protected Address $address;

}