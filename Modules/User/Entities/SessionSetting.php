<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Modules\Applicant\Entities\Applicant;

class SessionSetting extends Model
{
    use HasFactory, LogsActivity;
    
    protected $table = 'session_settings';

    protected $primaryKey='id';

    protected $fillable = [
        'session',
        'status',
    ];

    public function getActivitylogOptions() : LogOptions
    {
        return LogOptions::defaults();
    }
    
    //protected static $logFillable = ['session', 'status'];

    protected static $logAttributes = ['session', 'status'];
    protected static $logOnlyDirty = true;
    //protected static $recordEvents = ['created', 'updated', 'deleted'];
    protected static $logName = 'user';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "you have {$eventName} user";
    }
   

   public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
    
}
