<?php

namespace App\Domain\Services;

use App\Domain\Repository\AnswerRepository;
use App\Domain\Entities\Answer;

/**
 * AnswerWriter
 */
class AnswerWriter
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
     
     public function write(array $answerParam) : array
     {
         $answer   = new Answer($answerParam);
         $answerId = $this->repository->add($answer);
         
         return [
             'id' => answerId,
         ];
     }
}
