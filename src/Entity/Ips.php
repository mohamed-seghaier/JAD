<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\IpsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: IpsRepository::class)]
class Ips
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $address;

    #[ORM\Column(type: 'string', length: 255)]
    private $rela;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'ips')]
    private $user;

    #[ORM\Column(type: 'smallint')]
    private $blackList;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getRela(): ?string
    {
        return $this->rela;
    }

    public function setRela(string $rela): self
    {
        $this->rela = $rela;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->user->removeElement($user);

        return $this;
    }

    public function getBlackList(): ?int
    {
        return $this->blackList;
    }

    public function setBlackList(int $blackList): self
    {
        $this->blackList = $blackList;

        return $this;
    }
}
