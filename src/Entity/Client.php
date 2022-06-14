<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Client\PasswordAuthenticatedClientInterface;
use Symfony\Component\Security\Core\Client\ClientInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\ManyToOne(targetEntity: UserType::class, inversedBy: 'clients')]
    #[ORM\JoinColumn(nullable: false)]
    private $userType;

    #[ORM\Column(type: 'string', length: 255)]
    private $token;

    #[ORM\Column(type: 'string', length: 100)]
    private $lastName;

    #[ORM\Column(type: 'string', length: 100)]
    private $firstName;

    #[ORM\Column(type: 'date')]
    private $creationDate;

    #[ORM\Column(type: 'smallint')]
    private $active;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Address::class)]
    private $addresses;

    #[ORM\ManyToMany(targetEntity: Ips::class, mappedBy: 'client')]
    private $ips;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Brand::class)]
    private $brands;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Purchase::class)]
    private $purchases;


    public function __construct()
    {
        $this->addresses = new ArrayCollection();
        $this->ips = new ArrayCollection();
        $this->brands = new ArrayCollection();
        $this->purchases = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * A visual identifier that represents this client.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every client at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection<int, Address>
     */
    public function getAddresses(): Collection
    {
        return $this->addresses;
    }

    public function addAddress(Address $address): self
    {
        if (!$this->addresses->contains($address)) {
            $this->addresses[] = $address;
            $address->setClient($this);
        }

        return $this;
    }

    public function removeAddress(Address $address): self
    {
        if ($this->addresses->removeElement($address)) {
            // set the owning side to null (unless already changed)
            if ($address->getClient() === $this) {
                $address->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ips>
     */
    public function getIps(): Collection
    {
        return $this->ips;
    }

    public function addIp(Ips $ip): self
    {
        if (!$this->ips->contains($ip)) {
            $this->ips[] = $ip;
            $ip->addClient($this);
        }

        return $this;
    }

    public function removeIp(Ips $ip): self
    {
        if ($this->ips->removeElement($ip)) {
            $ip->removeClient($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Brand>
     */
    public function getBrands(): Collection
    {
        return $this->brands;
    }

    public function addBrand(Brand $brand): self
    {
        if (!$this->brands->contains($brand)) {
            $this->brands[] = $brand;
            $brand->setClient($this);
        }

        return $this;
    }

    public function removeBrand(Brand $brand): self
    {
        if ($this->brands->removeElement($brand)) {
            // set the owning side to null (unless already changed)
            if ($brand->getClient() === $this) {
                $brand->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @see ClientInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the client, clear it here
        // $this->plainPassword = null;
    }

    public function getUserType(): ?UserType
    {
        return $this->userType;
    }

    public function setUserType(?UserType $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * @return Collection<int, Purchase>
     */
    public function getPurchases(): Collection
    {
        return $this->purchases;
    }

    public function addPurchase(Purchase $purchase): self
    {
        if (!$this->purchases->contains($purchase)) {
            $this->purchases[] = $purchase;
            $purchase->setClient($this);
        }

        return $this;
    }

    public function removePurchase(Purchase $purchase): self
    {
        if ($this->purchases->removeElement($purchase)) {
            // set the owning side to null (unless already changed)
            if ($purchase->getClient() === $this) {
                $purchase->setClient(null);
            }
        }

        return $this;
    }
}
