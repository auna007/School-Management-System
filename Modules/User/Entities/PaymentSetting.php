<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class PaymentSetting extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'payment_settings';
    protected $fillable = ['title', 'value', 'status'];

    //protected static $logFillable = ['session', 'status'];

    protected static $logAttributes = ['session', 'status'];
    protected static $logOnlyDirty = true;
    //protected static $recordEvents = ['created', 'updated', 'deleted'];
    protected static $logName = 'user';

     public function getActivitylogOptions() : LogOptions
    {
        return LogOptions::defaults();
    } 

    public function getDescriptionForEvent(string $eventName): string
    {
        return "you have {$eventName} user";
    }
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\PaymentSettingFactory::new();
    }
}
