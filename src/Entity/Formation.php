<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $school;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $degree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fieldOfStudy;

    /**
     * @ORM\Column(type="integer")
     */
    private $yearOfStart;

    /**
     * @ORM\Column(type="integer")
     */
    private $endOfStart;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): self
    {
        $this->school = $school;

        return $this;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }

    public function getFieldOfStudy(): ?string
    {
        return $this->fieldOfStudy;
    }

    public function setFieldOfStudy(string $fieldOfStudy): self
    {
        $this->fieldOfStudy = $fieldOfStudy;

        return $this;
    }

    public function getYearOfStart(): ?int
    {
        return $this->yearOfStart;
    }

    public function setYearOfStart(int $yearOfStart): self
    {
        $this->yearOfStart = $yearOfStart;

        return $this;
    }

    public function getEndOfStart(): ?int
    {
        return $this->endOfStart;
    }

    public function setEndOfStart(int $endOfStart): self
    {
        $this->endOfStart = $endOfStart;

        return $this;
    }
}
