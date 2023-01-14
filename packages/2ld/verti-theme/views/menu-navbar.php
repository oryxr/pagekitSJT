<?php if ($root->getDepth() === 0) : ?>
<ul>
<?php endif ?>

    <?php foreach ($root->getChildren() as $node) : ?>
    <li class="<?= $node->get('active') ? 'current' : '' ?>" <?= ($root->getDepth() === 0 && $node->hasChildren()) ? 'data-uk-dropdown':'' ?>>
        <a href="<?= $node->getUrl() ?>"><?= $node->title ?></a>

        <?php if ($node->hasChildren()) : ?>

            <?php if ($root->getDepth() === 0) : ?>
            <?php endif ?>
                <?php if ($root->getDepth() === 0) : ?>
                <?php elseif ($root->getDepth() === 1) : ?>
                <?php else : ?>
                <?php endif ?>
                    <ul>
                    <?= $view->render('menu-navbar.php', ['root' => $node]) ?>
                    </ul>
            <?php if ($root->getDepth() === 0) : ?>
            <?php endif ?>
        <?php endif ?>
    <?php endforeach ?>
</li>
<?php if ($root->getDepth() === 0) : ?>
</ul>
<?php endif ?>
