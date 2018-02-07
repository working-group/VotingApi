<?php

namespace App\Domain\Services;

use App\Domain\Repository\AnswerRepository;

/**
 * Class AnswerReader
 */
class AnswerReader
{
    /** @var AnswerRepository */
    protected $repository;

    /**
     * AnswerReader constructor.
     *
     * @param AnswerRepository $repository
     */
    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function readByEnqueteId(int $enqueteId) : array
    {
        $answers = $this->repository
            ->findByEnqueteId($enqueteId)
            ->toArray();

        return [
            'id'      => $enqueteId,
            'count'   => count($answers),
            'answers' => $answers,
        ];
    }
}
