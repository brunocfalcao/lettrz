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

    $mail->add('menu37', ['caption' => 'Bruno']);

    Mail::to('bruno.falcao@live.com')->send($mail);

    return $mail;
});
