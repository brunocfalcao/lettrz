<?php

use App\Mail\TestLettrz;
use Brunocfalcao\Lettrz\Lettrz;
use Brunocfalcao\Lettrz\LettrzMailable;
use Brunocfalcao\Lettrz\Models\Lettrz as LettrzModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('lettrz/all', function () {
    return view('lettrz::examples.all');
});

if (config('lettrz.view-in-browser.enabled') == true) {
    Route::get(config('lettrz.view-in-browser.path').'{lettrz:uuid}', function (LettrzModel $lettrz) {

        $mail = new LettrzMailable();

        foreach ($lettrz->blocks as $block) {
            $mail->add($block['component'], $block['parameters']);
        }

        return $mail;
    })->middleware('throttle:5,1'); // 5 requests per minute to avoid DDoS.
}

Route::get('lettrz/test', function () {

    $mail = new TestLettrz();

    $mail->add('spacer');

    $mail->add('menu37', [
        'foreground-color' => '#FF3F3F'
    ]);

    $mail->add('text16', [
        'title' => 'Mastering Nova is yours',
        'paragraphs' => ['Thank you for buying my course! I wish you have
                         as much pleasure to learn from it as I had while
                         making it. It took me +300 hours to complete this
                         course and got it by 1/100 of the price that it
                         cost me. But that is okay! Appreciate it!',
                        '<b>Check out my other courses too! You can get 25%
                        discount on any of them henceforth!</b>'],

        'image-url' => url('vendor/mastering-nova/images/580x250.jpg'),

        'button' => [
            'width' => '350',
            'text' => 'Click here to reset your password',
            'url' => 'https://www.publico.pt',
            'background-color' => '#326CFF',
            'text-color' => '#FFFFFF'
        ]
    ]);

    $mail->add('copyright11', ['foreground-color' => '#A8A8A8',
                               'caption' => 'Mastering Nova -',
                               'lettering-unsubscribe-color' => '#F76F6F',
                               'unsubscribe-url' => 'https://www.laravel.com']);

    $mail->add('spacer');

    //Mail::to('bruno.falcao@live.com')->send($mail);

    return $mail;
});
