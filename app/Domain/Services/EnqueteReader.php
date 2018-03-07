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
     * アンケート一覧取得
     * @return array
     */
    public function readAll() : array
    {
        $result = $this->repository->findAll();
        $enquetes['enquetes'] = $result;
        return $enquetes;
        
    }
    
    /**
     * アンケート詳細取得
     * @return array
     */
    public function readByEnqueteId(int $enqueteId) : array
    {
        $result = $this->repository
            ->findByEnqueteId($enqueteId)
            ->toArray();
        
        dd($result[0]);
        
        
    
            }
}
