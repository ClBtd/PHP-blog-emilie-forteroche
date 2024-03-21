<?php 

/**
 * Entité Data,  définie par les champs
 * title, dateCreation, views, comments
 */

class Data extends AbstractEntity {

    private string $title = "";
    private DateTime $dateCreation;
    private int $views;
    private int $comments;


    /**
     * Constructeur de la fonction qui récupère les paramètres.
     */
    public function __construct(string $title, string $date_creation, int $views, int $comments)
    {
        $this->title = $title;
        $date_creation = DateTime::createFromFormat('Y-m-d H:i:s', $date_creation);
        $this->dateCreation = $date_creation;
        $this->views = $views;
        $this->comments = $comments;
    }

    /**
     * Getter pour le titre de l'article. 
     * @param string $title
     */
    public function getTitle() : string 
    {
        return $this->title;
    }
    
    /**
     * Getter pour le nombre de vues. 
     * @param int $views
     */
    public function getViews() : int 
    {
        return $this->views;
    }

    /**
     * Getter pour le nombre de commentaires. 
     * @param int $comments
     */
    public function getComments() : int 
    {
        return $this->comments;
    }

    /**
     * Getter pour la date de création de l'article. 
     * @param DateTime $dateCreation
     */
    public function getDateCreation() : DateTime 
    {
        return $this->dateCreation;
    }
}