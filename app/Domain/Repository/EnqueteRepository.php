<?php

namespace App\Domain\Repository;

use DB;

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

}