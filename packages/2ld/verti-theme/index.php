<?php

return [

    'name' => 'verti-theme',

    /**
     * Menu positions
     */
    'menus' => [

        'main' => 'Main',
        'offcanvas' => 'Offcanvas'

    ],

    /**
     * Widget positions
     */
    'positions' => [

        'navbar' => 'Navbar',
        'banner_top' => 'Banner Top',
        'features' => 'Features',
        'sidebar' => 'Sidebar',
        'footerpos' => 'Footer'

    ],

    /**
     * Node defaults
     */
    'node' => [

    ],

    /**
     * Widget defaults
     */
    'widget' => [

        'title_hide' => false,
        'title_size' => 'h2',
        'panel' => '',
        'widget_size' => 'h3',
        'widget_style' => '4u',
        'widget_image' => '',
        'widget_link' => ''

    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Configuration defaults
     */
    'config' => [

        'show_text_logo' => true,
        'sidebar_size' => '4u',
        'mainbody_size' => '8u',
        'copyright' => '&copy; Untitled. All rights reserved'
    ],

    /**
     * Events
     */
    'events' => [

        'view.system/site/admin/settings' => function ($event, $view) use ($app) {
            $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
            $view->data('$theme', $this);
        },

        'view.system/widget/edit' => function ($event, $view) {
            $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
        },

        /**
         * Custom markup calculations based on theme settings
         */

    ]

];
