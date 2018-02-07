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
        return DB::table('ansewrs')
          ->where('enquete_id', $enqueteId)
          ->get($enqueteId);
    }

}
