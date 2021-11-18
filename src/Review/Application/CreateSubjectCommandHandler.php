<?php

declare(strict_types=1);

namespace App\Review\Application;

use App\Review\Domain\SubjectRepositoryInterface;

class CreateSubjectCommandHandler
{
    private SubjectRepositoryInterface $subjectRepository;

    public function __construct(SubjectRepositoryInterface $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }

    public function __invoke(CreateSubjectCommand $command): void
    {
        $subject = $this->subjectRepository->new('toto', 'Détails de toto');
        $this->subjectRepository->save($subject);
    }
}
