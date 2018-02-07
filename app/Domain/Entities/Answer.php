<?php

namespace App\Domain\Entities;

/**
 * Class Answer
 */
class Answer
{
    private id;
    private item;
    private comment;
    private commentedBy;

    public function __construct(array $array)
    {
        $this->id          = $array['id'];
        $this->item        = $array['item'];
        $this->comment     = $array['comment'];
        $this->commentedBy = $array['commentedBy'];
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getItem()
    {
        return $this->item;
    }
    
    public function getComment()
    {
        return $this->comment;
    }
    
    public function getCommentedBy()
    {
        return $this->commentedBy;
    }
}
