<?php

declare(strict_types=1);

namespace App\Review\Domain;

interface Subject
{
    public function getId(): ?string;

    public function getTitle(): ?string;

    public function setTitle(string $title): self;

    public function getDetails(): ?string;

    public function setDetails(string $details): self;
}
