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
     * @ORM\Column(type="string",length=2)
     */
    protected string $countryCode;

    /**
     * @var string $city
     *
     * @ORM\Column(type="string",length=100)
     */
    protected string $city;

    /**
     * @var string $street1
     *
     * @ORM\Column(type="string",length=100)
     */
    protected string $street1;

    /**
     * @var string $street2
     *
     * @ORM\Column(type="string",length=100)
     */
    protected string $street2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet1(): ?string
    {
        return $this->street1;
    }

    public function setStreet1(string $street1): self
    {
        $this->street1 = $street1;

        return $this;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(string $street2): self
    {
        $this->street2 = $street2;

        return $this;
    }
}