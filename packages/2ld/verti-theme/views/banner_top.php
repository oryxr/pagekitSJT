    <div id="banner-wrapper">
        <div id="banner" class="box container">
            <div class="row">
                <?php foreach ($widgets as $widget) : ?>
                <div class="<?= $widget->theme['widget_size'] ?> 12u(medium)">
                <?= $widget->get('result') ?>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>