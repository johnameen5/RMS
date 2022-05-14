<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_Address")
 * @ORM\Entity()
 */
class Address
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
     * @var string $country
     *
     * @ORM\Column(type="string")
     */
    protected string $country;

    /**
     * @var string $city
     *
     * @ORM\Column(type="string")
     */
    protected string $city;

    /**
     * @var string $street1
     *
     * @ORM\Column(type="string")
     */
    protected string $street1;

    /**
     * @var string $street2
     *
     * @ORM\Column(type="string")
     */
    protected string $street2;
}