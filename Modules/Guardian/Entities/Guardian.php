<?php

namespace Modules\Guardian\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Guardian extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity; 

    protected $table = 'guardians';

    protected $primaryKey='id';

    protected $fillable = [
        'guardian_name',
        'relationship',
        'address',
        'phone_number', 
        'email'
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Guardian\Database\factories\GuardianFactory::new();
    }
}
