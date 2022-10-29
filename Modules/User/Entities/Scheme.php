<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Scheme extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $table = 'schemes';

    protected $primaryKey='id';

    protected $fillable = [
        'subject_id',
        'f_term_ctn',
        's_term_ctn',
        't_term_ctn',
    ];
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\SchemeFactory::new();
    }
}
