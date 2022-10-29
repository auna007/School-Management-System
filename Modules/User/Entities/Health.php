<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Health extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity; 

    protected $table = 'healths';

    protected $primaryKey='id';

    protected $fillable = [
        'disabilty',
        'blood_group'
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\HealthFactory::new();
    }
}
