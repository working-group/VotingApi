<?php

namespace App\Domain\Services;

use App\Domain\Repository\EnqueteRepository;

/**
 * Class EnqueteReader
 */
class EnqueteReader
{
    /** @var EnqueteRepository */
    protected $repository;

    /**
     * EnqueteReader constructor.
     *
     * @param EnqueteRepository $repository
     */
    public function __construct(EnqueteRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function readAll() : array
    {
        $result = $this->repository->findAll();
        $enquetes['enquete'] = $result;
        return $enquetes;
    }
    
    public function readByEnqueteId(int $enqueteId)
    {
        $result = $this->repository->findByEnqueteId($enqueteId);
        return 'xxxx';
}
