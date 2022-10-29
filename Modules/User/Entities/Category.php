<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Modules\Applicant\Entities\Applicant;
use Spatie\Activitylog\LogOptions;

class Category extends Model
{
    use HasFactory, LogsActivity; 

    protected $table = 'categories';

    protected $primaryKey='id';

    protected $fillable = ['category', 'status'];

    protected static $logAttributes = ['category', 'status'];
    protected static $logOnlyDirty = true;
    protected static $logName = 'user';

    public function getActivitylogOptions() : LogOptions
    {
        return LogOptions::defaults();
    } 

    public function getDescriptionForEvent(string $eventName): string
    {
        return "you have {$eventName} user";
    }


     public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function applicant()
    {
        return $this->hasOne(Applicant::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\CategoryFactory::new();
    }
}
