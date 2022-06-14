<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'addresses')]
    #[ORM\JoinColumn(nullable: false)]
    private $client;

    #[ORM\Column(type: 'string', length: 100)]
    private $lastName;

    #[ORM\Column(type: 'string', length: 100)]
    private $firstName;

    #[ORM\Column(type: 'string', length: 25)]
    private $streetNumber;

    #[ORM\Column(type: 'string', length: 150)]
    private $streetName;

    #[ORM\Column(type: 'string', length: 150)]
    private $streetAddition;

    #[ORM\Column(type: 'string', length: 10)]
    private $postalCode;

    #[ORM\Column(type: 'string', length: 100)]
    private $city;

    #[ORM\Column(type: 'smallint')]
    private $main;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getAddressNumber(): ?string
    {
        return $this->addressNumber;
    }

    public function setAddressNumber(string $addressNumber): self
    {
        $this->addressNumber = $addressNumber;

        return $this;
    }

    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(string $streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getStreetAddition(): ?string
    {
        return $this->streetAddition;
    }

    public function setStreetAddition(string $streetAddition): self
    {
        $this->streetAddition = $streetAddition;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

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

    public function getMain(): ?int
    {
        return $this->main;
    }

    public function setMain(int $main): self
    {
        $this->main = $main;

        return $this;
    }
}
