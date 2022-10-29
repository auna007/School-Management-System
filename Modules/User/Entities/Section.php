<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Section extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'sections';

    protected $primaryKey='id';

    protected $fillable = ['section_title', 'class_id', 'status'];

    protected static $logAttributes = ['section_title', 'status'];
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
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\SectionFactory::new();
    }
}
