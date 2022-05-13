<?php

namespace App\InventoryManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="imb_company")
 * @ORM\Entity()
 */
class Company
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
    private string $arabicName;

    /**
     * @var string $logoPath
     *
     * @ORM\Column(type="string", length=255)
     */
    private string $logoPath;
}