<?php

namespace App\Domain\Entities;

/**
 * Class Answer
 */
class Answer
{
    private id;
    private enqueteId;
    private item;
    private comment;
    private commentedBy;

    public function __construct(array $array)
    {
        $this->id          = $array['id'];
        $this->enqueteId   = $aaray['enqueteId'];
        $this->item        = $array['item'];
        $this->comment     = $array['comment'];
        $this->commentedBy = $array['commentedBy'];
    }
    
    private function getId()
    {
        return $this->id;
    }
    
    private function getEnqueteId()
    {
        return $this->enqueteId;
    }
    
    private function getItem()
    {
        return $this->item;
    }
    
    private function getComment()
    {
        return $this->comment;
    }
    
    private function getCommentedBy()
    {
        return $this->commentedBy;
    }
}
