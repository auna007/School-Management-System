<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Subject extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'subjects';

    protected $primaryKey='id';

    protected $fillable = ['subject_title','subject_acronym', 'class_id','category_id','status'];

    protected static $logAttributes = ['subject_title','subject_acronym','class_id','category_id','status'];
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
    
    public function class()
    {
        return $this->belongsTo(ClassManager::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\SubjectFactory::new();
    }

}
