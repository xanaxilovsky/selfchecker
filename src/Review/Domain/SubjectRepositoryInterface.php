<?php

declare(strict_types=1);

namespace App\Review\Domain;

interface SubjectRepositoryInterface
{
    public function save(Subject $subject): void;

    public function new(string $title, string $details): Subject;
}
