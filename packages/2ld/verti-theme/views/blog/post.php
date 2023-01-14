<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article>
    <?php if ($image = $post->get('image.src')): ?>
    <span class="image fit"><img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>"></span>
    <?php endif ?>

    <span>
        <?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?>
    </span>
    <h2><?= $post->title ?></h2>
    <div><?= $post->content ?></div>

</article>

