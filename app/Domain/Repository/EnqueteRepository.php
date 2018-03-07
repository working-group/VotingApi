<?php

namespace App\Domain\Repository;

use DB;
use App\Domain\Entities\Enquete;

/**
 * Class EnqueteRepository
 */
class EnqueteRepository
{

    /**
     * @return stdClass
     */
    public function findAll()
    {
        return DB::table('enquetes')->get();
    }
    
    /**
     * @return stdClass
     */
    public function findByEnqueteId(int $enqueteId)
    {
        return DB::table('enquetes')
            ->select('enquetes.id, enquetes.title, enquetes.question, enquete_items.item_name)
            ->join('enquete_items', 'enquetes.id', '=', 'enquete_items.enquete_id')
            ->where('enquetes.id', $enqueteId)
            ->get();
    }
}
