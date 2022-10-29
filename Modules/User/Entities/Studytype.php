<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Studytype extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $table = 'studytypes';

    protected $primaryKey='id';

    protected $fillable = [
        'studytype',
    ];

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\StudytypeFactory::new();
    }
}
