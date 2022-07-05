<?php

return [

    /**
     * -----------------
     * Attribute Defaults.
     *
     * Things that if you don't specify, then lettrz will take them from
     * here. The key name specified here, is the same you should use when
     * calling the lettrz->add() method on your parameter keys.
     */
    'defaults' => [

        /**
         * System general variables. Used in places like the header logo url,
         * or the name of the application, etc.
         */
        'name' => config('app.name'),
        'app-url' => config('app.url'),
        'logo-125x25' => config('app.url').
                         '/vendor/mastering-nova/images/logo.png',

        /**
         * Main template colors. Foreground will be the background color
         * of the template blocks. The background color is the newsletter
         * outer content background color.
         */
        'foreground-color' => '#E050B9',
        'background-color' => '#DDDDDD',

        /**
         * Lettering colors.
         * -bold-color: The letter color for automated bold texts.
         * -paragraph: The letter color for the normal paragraph texts.
         */
        'lettering-bold-color' => '#000000',
        'lettering-paragraph' => '#3C3C3C'
    ],

    'view-in-browser' => [
        'enabled' => true,
        'path' => 'lettrz/view/',
    ],
];
