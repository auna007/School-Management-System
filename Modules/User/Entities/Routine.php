<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Routine extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $table = 'routines';

    protected $primaryKey='id';

    protected $fillable = [
        'subject_id',
        'day',
        'start_time',
        'stop_time',
    ];

    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\RoutineFactory::new();
    }
}
