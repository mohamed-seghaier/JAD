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

    #[ORM\ManyToMany(targetEntity: Client::class, inversedBy: 'ips')]
    private $client;

    #[ORM\Column(type: 'smallint')]
    private $blackList;

    public function __construct()
    {
        $this->client = new ArrayCollection();
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

    /**
     * @return Collection<int, Client>
     */
    public function getClient(): Collection
    {
        return $this->client;
    }

    public function addClient(Client $client): self
    {
        if (!$this->client->contains($client)) {
            $this->client[] = $client;
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        $this->client->removeElement($client);

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
