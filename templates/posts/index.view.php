<h1>Posts</h1>

<?php foreach ($posts as $post) : ?>
    <h2><?= $post['title'] ?></h2>
    <p><?= $post['description'] ?></p>
<?php endforeach ?>