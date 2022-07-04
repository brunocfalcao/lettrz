<?php

namespace Brunocfalcao\Lettrz\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Lettrz extends Model
{
    use SoftDeletes;

    protected $table = 'lettrz_emails';

    protected $casts = [
        'blocks' => 'array'
    ];

    /**
     * Auto-generate an uuid on creating event.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute('uuid', Uuid::uuid4());
        });
    }
}
