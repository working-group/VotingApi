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
        foreach($result as $value){
            var_dump('aaa');
            var_dump($value);
        }
        return [
            'id'            => $result[0]->id,
            'title'         => $result[0]->title,
            'question'      => $result[0]->question,
            'selections'    => [
                 [
                    'id' => $result[0]->item_id,
                    'discription' =>$result[0]->item_name,
                 ],
                 [
                    'id' => $result[1]->item_id,
                    'discription' =>$result[1]->item_name,
                 ],
                 [
                     'id' => $result[2]->item_id,
                    'discription' =>$result[2]->item_name,
                 ],
                 [
                 'id' => $result[3]->item_id,
                    'discription' =>$result[3]->item_name,
                 ],
            ],
        ];
        
   }
}
