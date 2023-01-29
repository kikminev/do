<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LocationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
#[ApiResource]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $workingFrom = null;

    #[ORM\Column(nullable: true)]
    private ?int $workingTo = null;

    #[ORM\Column(nullable: true)]
    private ?bool $worksOnWeekends = null;

    #[ORM\Column(nullable: true)]
    private ?int $weekendWorkingFrom = null;

    #[ORM\Column(nullable: true)]
    private ?int $weekendWorkingTo = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getWorkingFrom(): ?int
    {
        return $this->workingFrom;
    }

    public function setWorkingFrom(?int $workingFrom): self
    {
        $this->workingFrom = $workingFrom;

        return $this;
    }

    public function getWorkingTo(): ?int
    {
        return $this->workingTo;
    }

    public function setWorkingTo(?int $workingTo): self
    {
        $this->workingTo = $workingTo;

        return $this;
    }

    public function isWorksOnWeekends(): ?bool
    {
        return $this->worksOnWeekends;
    }

    public function setWorksOnWeekends(?bool $worksOnWeekends): self
    {
        $this->worksOnWeekends = $worksOnWeekends;

        return $this;
    }

    public function getWeekendWorkingFrom(): ?int
    {
        return $this->weekendWorkingFrom;
    }

    public function setWeekendWorkingFrom(?int $weekendWorkingFrom): self
    {
        $this->weekendWorkingFrom = $weekendWorkingFrom;

        return $this;
    }

    public function getWeekendWorkingTo(): ?int
    {
        return $this->weekendWorkingTo;
    }

    public function setWeekendWorkingTo(?int $weekendWorkingTo): self
    {
        $this->weekendWorkingTo = $weekendWorkingTo;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
