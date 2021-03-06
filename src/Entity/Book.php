<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *@Assert\NotBlank(
     *     message="Не может быть пустым!"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     *@Assert\NotBlank(
     *     message="Не может быть пустым!"
     * )
     * @Assert\Type(
     *     type="int",
     *     message="Должно быть число!"
     * )
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     @Assert\NotBlank(
     *     message="Не может быть пустым!"
     * )
     */
    private $author;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }
}
