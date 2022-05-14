<?php

namespace App\InventoryManagementBundle\Entity;

use App\AppBundle\Entity\User;
use DateTime;
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
     * @var string $englishFirstName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $englishFirstName;

    /**
     * @var string $englishLastName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $englishLastName;

    /**
     * @var string $arabicFirstName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $arabicFirstName;

    /**
     * @var string $arabiclengthName
     *
     * @ORM\Column(type="string", length=64)
     */
    protected string $arabicLengthName;

    /**
     * @var int $phoneNumber
     *
     * @ORM\Column(type="string", length=20)
     */
    protected int $phoneNumber;

    /**
     * @var Address $address
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Address")
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
     * @ORM\Column(type="string",length=2)
     */
    protected int $nationality;

    /**
     * @var int $employeeStatus
     *
     * @ORM\Column(type="integer")
     */
    protected int $employeeStatus;


    /**
     * @var DateTime $DOB
     *
     * @ORM\Column(type="date")
     */
    protected DateTime $DOB;

    /**
     * @var DateTime $dateOfJoin
     *
     * @ORM\Column(type="date")
     */
    protected DateTime $dateOfJoin;

    /**
     * @var int $designation
     *
     * @ORM\Column(type="integer")
     */
    protected int $designation;

    /**
     * @var Company $company
     *
     * @ORM\ManyToOne(targetEntity="App\InventoryManagementBundle\Entity\Company")
     */
    protected Company $company;

    /**
     * @var DateTime $terminationDate
     *
     * @ORM\Column(type="datetime")
     */
    protected DateTime $terminationDate;

    /**
     * @var User $user
     *
     * @ORM\OneToOne(targetEntity="App\AppBundle\Entity\User",inversedBy="employee")
     */
    protected User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnglishFirstName(): ?string
    {
        return $this->englishFirstName;
    }

    public function setEnglishFirstName(string $englishFirstName): self
    {
        $this->englishFirstName = $englishFirstName;

        return $this;
    }

    public function getEnglishLastName(): ?string
    {
        return $this->englishLastName;
    }

    public function setEnglishLastName(string $englishLastName): self
    {
        $this->englishLastName = $englishLastName;

        return $this;
    }

    public function getArabicFirstName(): ?string
    {
        return $this->arabicFirstName;
    }

    public function setArabicFirstName(string $arabicFirstName): self
    {
        $this->arabicFirstName = $arabicFirstName;

        return $this;
    }

    public function getArabicLengthName(): ?string
    {
        return $this->arabicLengthName;
    }

    public function setArabicLengthName(string $arabicLengthName): self
    {
        $this->arabicLengthName = $arabicLengthName;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getRelationShipStatus(): ?int
    {
        return $this->relationShipStatus;
    }

    public function setRelationShipStatus(int $relationShipStatus): self
    {
        $this->relationShipStatus = $relationShipStatus;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getEmployeeStatus(): ?int
    {
        return $this->employeeStatus;
    }

    public function setEmployeeStatus(int $employeeStatus): self
    {
        $this->employeeStatus = $employeeStatus;

        return $this;
    }

    public function getDOB(): ?DateTime
    {
        return $this->DOB;
    }

    public function setDOB(DateTime $DOB): self
    {
        $this->DOB = $DOB;

        return $this;
    }

    public function getDateOfJoin(): ?DateTime
    {
        return $this->dateOfJoin;
    }

    public function setDateOfJoin(DateTime $dateOfJoin): self
    {
        $this->dateOfJoin = $dateOfJoin;

        return $this;
    }

    public function getDesignation(): ?int
    {
        return $this->designation;
    }

    public function setDesignation(int $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getTerminationDate(): ?DateTime
    {
        return $this->terminationDate;
    }

    public function setTerminationDate(DateTime $terminationDate): self
    {
        $this->terminationDate = $terminationDate;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}