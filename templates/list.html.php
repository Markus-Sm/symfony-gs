<!-- templates/list.html.php -->

<?php $title = 'List of Posts'; ?>

<?php ob_start() ?>
<h1>List of Posts</h1>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="/show?id=<?= $post['id'] ?>">
                <?= $post['title'] ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.html.php' ?>

<!-- // based on https://symfony.com/doc/current/introduction/from_flat_php_to_symfony.html -->
