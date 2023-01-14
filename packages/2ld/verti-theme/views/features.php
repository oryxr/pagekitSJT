<div id="features-wrapper">
    <div class="container">
        <div class="row">
                <?php foreach ($widgets as $widget) : ?>
            <div class="<?= $widget->theme['widget_size'] ?> 12u(medium)">
                        <!-- Box -->
                        <?php if (!$widget->theme['widget_link']) : ?>
                            <section class="<?= $widget->theme['widget_style'] ?>">
                                <?php if (!$widget->theme['widget_image']) : ?>
                                <?php else : ?>
                                    <span class="image featured">
                                    <img src="<?= $widget->theme['widget_image'] ?>" alt="<?= $widget->title ?>" width="100%"/>
                                       </span>
                                <?php endif ?>
                                <div class="inner">
                                    <header>
                                        <?php if (!$widget->theme['title_hide']) : ?>
                                        <<?= $widget->theme['title_size'] ?>><?= $widget->title ?></<?= $widget->theme['title_size'] ?>>
                                    <?php endif ?>
                                    </header>
                                    <p><?= $widget->get('result') ?></p>
                                </div>
                            </section>
                        <?php else : ?>
                        <section class="<?= $widget->theme['widget_style'] ?>">
                                <?php if (!$widget->theme['widget_image']) : ?>
                                <?php else : ?>
                                <a href="<?= $widget->theme['widget_link'] ?>" class="image featured">
                                <img src="<?= $widget->theme['widget_image'] ?>" alt="" width="100%"/>
                                </a>
                                <?php endif ?>
                            <div class="inner">
                                <header>
                                    <?php if (!$widget->theme['title_hide']) : ?>
                                        <<?= $widget->theme['title_size'] ?>><a href="<?= $widget->theme['widget_link'] ?>" class="image featured"><?= $widget->title ?></a></<?= $widget->theme['title_size'] ?>>
                                    <?php endif ?>
                                </header>
                                <p><?= $widget->get('result') ?></p>
                            </div>
                        </section>
                        <?php endif ?>
            </div>
                <?php endforeach ?>
        </div>
    </div>
</div>