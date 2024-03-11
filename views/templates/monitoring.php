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
        <option value="title_ASC" <?= ($sort === 'title_ASC') ? 'selected' : ''; ?>>Par titre (croissant)</option>
        <option value="title_DESC" <?= ($sort === 'title_DESC') ? 'selected' : ''; ?>>Par titre (décroissant)</option>
        <option value="views_ASC" <?= ($sort === 'views_ASC') ? 'selected' : ''; ?>>Par nombre de vues (croissant)</option>
        <option value="views_DESC" <?= ($sort === 'views_DESC') ? 'selected' : ''; ?>>Par nombre de vues (décroissant)</option>
        <option value="comments_ASC" <?= ($sort === 'comments_ASC') ? 'selected' : ''; ?>>Par nombre de commentaires (croissant)</option>
        <option value="comments_DESC" <?= ($sort === 'comments_DESC') ? 'selected' : ''; ?>>Par nombre de commentaires (décroissant)</option>
        <option value="dateCreation_ASC"<?= ($sort === 'dateCreation_ASC') ? 'selected' : ''; ?>>Par date (croissant)</option>
        <option value="dateCreation_DESC" <?= ($sort === 'dateCreation_DESC') ? 'selected' : ''; ?>>Par date (décroissant)</option>
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

