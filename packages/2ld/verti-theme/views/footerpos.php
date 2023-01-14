<?php foreach ($widgets as $widget) : ?>
    <div class="<?= $widget->theme['widget_size'] ?> 12u$(small)">
        <!-- Links -->
        <section class="<?= $widget->theme['widget_style'] ?>">
            <?php if (!$widget->theme['title_hide']) : ?>
            <<?= $widget->theme['title_size'] ?>><?= $widget->title ?></<?= $widget->theme['title_size'] ?>>
            <?php endif ?>
            <?= $widget->get('result') ?>
        </section>
    </div>
<?php endforeach ?>