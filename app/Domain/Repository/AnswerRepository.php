<?php
2
3namespace App\Domain\Repository;
4
5use DB;
6
7/**
8 * Class AnswerRepository
9 */
1class AnswerRepository
1{  
1    public function add($answer)
1    { 
1        return DB::table('answer')->insertGetId([
	     'enquete_id'   => $answer->getEnqueteId(),
	     'item_id'      => $answer->getItemId(),
	     'comment'      => $answer->getComment(),
	     'commented_by' => $answer->getCommentedBy(),
	 )};
19   }
21}
