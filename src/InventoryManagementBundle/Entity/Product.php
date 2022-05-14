<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_product")
 * @ORM\Entity()
 */
class Product
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
     * @var Category $category
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Category")
     */
    protected Category $category;

    /**
     * @var float $price
     *
     * @ORM\Column(type="float")
     */
    protected float $price;

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
     * @var int $type
     *
     * @ORM\Column(type="integer")
     */
    protected int $type;

    /**
     * @var float $reorderQuantity
     *
     * @ORM\Column(type="float")
     */
    protected float $reorderQuantity;

    /**
     * @var float $chargableWeight
     *
     * @ORM\Column(type="float")
     */
    protected float $chargableWeight;
}