<?php $view->script('posts', 'blog:app/bundle/posts.js', 'vue') ?>

    <?php foreach ($posts as $post) : ?>
    <article>

        <?php if ($image = $post->get('image.src')): ?>
        <a class="image fit" href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>"></a>
        <?php endif ?>

        <span>
            <?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?>
        </span>
        
        <h2><a href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><?= $post->title ?></a></h2>

        <div><?= $post->excerpt ?: $post->content ?></div>

    </article>
    <?php endforeach ?>

    <?php

        $range     = 3;
        $total     = intval($total);
        $page      = intval($page);
        $pageIndex = $page - 1;

    ?>

    <?php if ($total > 1) : ?>

    <div class="grid">
        <div class="row">

        <?php for($i=1;$i<=$total;$i++): ?>
            <?php if ($i <= ($pageIndex+$range) && $i >= ($pageIndex-$range)): ?>

                <?php if ($i == $page): ?>
                <div><span class="button active" style="background: #222222;">&nbsp;&nbsp;<?=$i?>&nbsp;&nbsp;</span></div>
                <?php else: ?>
                <div>
                    <a href="<?= $view->url('@blog/page', ['page' => $i]) ?>" class="button">&nbsp;&nbsp;<?=$i?>&nbsp;&nbsp;</a>
                </div>
                <?php endif; ?>

            <?php elseif($i==1): ?>

                <div>
                    <a href="<?= $view->url('@blog/page', ['page' => 1]) ?>" class="button">&nbsp;&nbsp;1&nbsp;&nbsp;</a>
                </div>
                <div><span>...</span></div>

            <?php elseif($i==$total): ?>

                <div><span class="button" style="background: #FFFFFF; color: #222222;">...</span></div>
                <div>
                    <a href="<?= $view->url('@blog/page', ['page' => $total]) ?>" class="button">&nbsp;&nbsp;<?=$total?>&nbsp;&nbsp;</a>
                </div>

            <?php endif; ?>
        <?php endfor; ?>

        </div>
    </div>
    <?php endif ?>

