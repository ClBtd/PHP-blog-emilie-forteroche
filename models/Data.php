<?php 

class Data extends AbstractEntity {

    private string $title = "";
    private DateTime $dateCreation;
    private int $views;
    private int $comments;

    public function __construct(string $title, string $date_creation, int $views, int $comments)
    {
        $this->title = $title;
        $date_creation = DateTime::createFromFormat('Y-m-d H:i:s', $date_creation);
        $this->dateCreation = $date_creation;
        $this->views = $views;
        $this->comments = $comments;
    }
    public function getTitle() : string 
    {
        return $this->title;
    }
    
    public function getViews() : int 
    {
        return $this->views;
    }

    public function getComments() : int 
    {
        return $this->comments;
    }

    public function getDateCreation() : DateTime 
    {
        return $this->dateCreation;
    }
}