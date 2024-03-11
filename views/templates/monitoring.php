<?php 
    /* 
    Affichage du tableau contenant les données à propos des articles.
     */
?>

<h2>Données des articles</h2>

<form action="index.php" method="get">
    <input type="hidden" name="action" value="monitoring">
    <label for="sort">Trier par : </label>
    <select name="sort" id="sort">
        <option value="title_asc" selected>Par titre (croissant)</option>
        <option value="title_desc">Par titre (décroissant)</option>
        <option value="views_asc">Par nombre de vues (croissant)</option>
        <option value="views_desc">Par nombre de vues (décroissant)</option>
        <option value="comments_asc">Par nombre de commentaires (croissant)</option>
        <option value="comment_desc">Par nombre de commentaires (décroissant)</option>
        <option value="date_asc">Par date (croissant)</option>
        <option value="date_desc">Par date (décroissant)</option>
    </select>
    <button type="submit" class="submit">Sélectionner</button>
</form>

<table class="results">
    <thead>
        <tr>
            <th>Titre de l'article</th>
            <th>Nombre de vues</th>
            <th>Nombre de commentaires</th>
            <th>Date de publication</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?=$data->getTitle()?></td>
                <td><?=$data->getViews()?></td>
                <td><?=$data->getComments()?></td>
                <td><?=ucfirst(Utils::convertDateToFrenchFormat($data->getDateCreation()))?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
