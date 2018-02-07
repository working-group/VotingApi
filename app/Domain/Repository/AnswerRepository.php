<?php

namespace App\Domain\Repository;

use DB;
use App\Domain\Entities\Answer;

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
  
    /**
     * @return int
     */
    public function add(Answer $answer)
    { 
        return DB::table('answer')->insertGetId([
            'enquete_id'   => $answer->getEnqueteId(),
            'item_id'      => $answer->getItemId(),
            'comment'      => $answer->getComment(),
            'commented_by' => $answer->getCommentedBy(),
        ]);
    }
}
