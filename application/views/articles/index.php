<?php foreach ($articles as $article): ?>
<h2><?php echo $article['titre'] ?></h2>
<div id="main">
<?php echo $article['texte'] ?>
</div>
<p><a href="view/<?php echo $article['id_article'] ?>">Voir article</a></p>
<?php endforeach ?>
