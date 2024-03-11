<?php

class DataManager extends AbstractEntityManager {

    public function getDatas() : array
    {
        $sql = "SELECT title, article.date_creation, views, COUNT(comment.id) AS comments FROM article LEFT JOIN comment ON article.id = comment.id_article GROUP BY article.id;";
        $result = $this->db->query($sql);
        $datas = [];

        while ($data = $result->fetch()) {
            $datas[] = new Data($data['title'], $data['date_creation'], $data['views'], $data['comments']);
        }
        return $datas;
    }

}

