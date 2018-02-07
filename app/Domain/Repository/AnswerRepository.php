<?php

namespace App\Domain\Repository;

use DB;

/**
 * Class AnswerRepository
 */
class AnswerRepository
{  
    public function add($answer)
    { 
        return DB::table('answer')->insertGetId([
             'enquete_id'   => $answer->getEnqueteId(),
             'item_id'      => $answer->getItemId(),
             'comment'      => $answer->getComment(),
             'commented_by' => $answer->getCommentedBy(),
        )];
    }
}
