<?php

namespace App\Domain\Repository;

use DB;

/**
 * Class AnswerRepository
 */
class AnswerRepository
{

    /**
     * @return stdClass
     */
    public function findByEnqueteId(int $enqueteId)
    {
        return DB::table('answers')
          ->where('enquete_id', $enqueteId)
          ->get($enqueteId);
    }

}
