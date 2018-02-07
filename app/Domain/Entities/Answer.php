<?php

namespace App\Domain\Entities;

/**
 * Class Answer
 */
class Answer
{
    private $id;
    private $enqueteId;
    private $itemId;
    private $comment;
    private $commentedBy;

    public function __construct(array $array)
    {
        $this->enqueteId   = $array['enqueteId'];
        $this->itemId      = $array['itemId'];
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
    
    public function getItemId()
    {
        return $this->itemId;
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
