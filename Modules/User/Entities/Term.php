<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Term extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $table = 'terms';

    protected $primaryKey='id';

    protected $fillable = [
        'term',
    ];
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\TermFactory::new();
    }
}
