<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $isbnID = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre ne peut pas être vide')]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'auteur ne peut pas être vide")]
    private ?string $author = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    private ?Category $category = null;

    #[ORM\Column]
    private ?bool $is_avaiable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsbnID(): ?string
    {
        return $this->isbnID;
    }

    public function setIsbnID(string $isbnID): static
    {
        $this->isbnID = $isbnID;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function isAvaiable(): ?bool
    {
        return $this->is_avaiable;
    }

    public function setIsAvaiable(bool $is_avaiable): static
    {
        $this->is_avaiable = $is_avaiable;

        return $this;
    }
}
