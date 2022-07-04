<?php

return [

    /**
     * -----------------
     * Attribute Defaults
     *
     * Things that if you don't specify, then lettrz will take them from
     * here. The key name specified here, is the same you should use when
     * calling the lettrz->add() method on your parameter keys.
     *
     */
    'defaults' => [
        'foreground-color' => '#E050B9',
        'background-color' => '#DDDDDD',
        'app-url' => config('app.url'),
        'logo-125x25' => 'https://dummyimage.com/125x25/000/fff&text=logo'
    ],


];