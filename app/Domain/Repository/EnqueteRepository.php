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
    public function findByEnqueteId(int $euqueteId)
    {
        return DB::table('enquetes')
            ->join('enquete_items', 'enquete_id', '=', 'enquetes.id')
            ->where('id', $enqueteId)
            ->get();
    }
}
