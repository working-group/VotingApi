<?php

namespace App\Domain\Entities;

/**
 * Class Answer
 */
class Answer
{
    private $id;
    private $enqueteId;
    private $item;
    private $comment;
    private $commentedBy;

    public function __construct(array $array)
    {
        $this->enqueteId   = $array['enqueteId'];
        $this->item        = $array['itemId'];
        $this->comment     = $array['comment'];
        $this->commentedBy = $array['commentedBy'];
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    private function setId($id)
    {
        $this->id = $id;
    }
    
    public function getEnqueteId()
    {
        return $this->enqueteId;
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
