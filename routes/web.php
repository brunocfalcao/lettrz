<?php

use Brunocfalcao\Lettrz\Lettrz;
use Brunocfalcao\Lettrz\Models\Lettrz as LettrzModel;
use Illuminate\Support\Facades\Route;

Route::get('lettrz/all', function () {

    //$mail = new Lettrz();

    //$mail->title = 'My title';

    //$mail->add('paragraph', 'This is a first paragraph');

    //return $mail;

    return view('lettrz::examples.all');
});

Route::get('lettrz/view/{lettrz:uuid}', function (LettrzModel $lettrz) {

    $mail = new Lettrz();

    foreach ($lettrz->blocks as $block) {
        $mail->add($block['component'], $block['parameters']);
    }

    return $mail;
});

Route::get('lettrz/test', function () {

    $mail = new Lettrz();

    $mail->add('menu37', ['caption' => 'Bruno']);

    return $mail;
});
