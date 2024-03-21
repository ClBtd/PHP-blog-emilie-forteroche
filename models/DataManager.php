<?php

/**
 * Classe qui gère les données sur les articles.
 */

class DataManager extends AbstractEntityManager {

    /**
     * Récupère toutes les données concernant tous les articles.
     * @return array : un tableau d'objets Datas.
     */
    public function getDatas(string $sorting, string $order) : array
    {
        $sql = "SELECT title, article.dateCreation, views, COUNT(comment.id) AS comments 
        FROM article 
        LEFT JOIN comment ON article.id = comment.id_article 
        GROUP BY article.id
        ORDER BY $sorting $order";
        $result = $this->db->query($sql);
        $datas = [];

        while ($data = $result->fetch()) {
            $datas[] = new Data($data['title'], $data['dateCreation'], $data['views'], $data['comments']);
        }
        return $datas;
    }

}

