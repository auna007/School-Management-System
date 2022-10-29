<?php

namespace Modules\Applicant\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Modules\User\Entities\SessionSetting;
use Modules\User\Entities\ClassManager;
use Modules\User\Entities\Category;
use Spatie\Activitylog\LogOptions;

class Applicant extends Authenticatable
{
    use HasApiTokens, HasFactory, LogsActivity;
    
    protected $guard = 'applicant';
    protected $guard_name = 'applicant';

    protected $table = 'applicants';
    
    protected $fillable = ['application_no', 'f_name', 'surname', 'm_name', 'email', 'gender', 'phone_no', 'address', 'state', 'lga', 'passport', 'disability', 'blood_group', 'allergic_info', 'guardian_name', 'relationship', 'g_address', 'g_phone_no', 'g_email', 'class_id', 'category_id', 'status', 'password', 'previous_sch', 'session_id', 'propose_class_id'];
    
    public function getActivitylogOptions() : LogOptions
    {
        return LogOptions::defaults();
    }
    
    protected static $logAttributes = ['application_no', 'f_name', 'surname', 'm_name', 'email', 'gender', 'phone_no', 'address', 'state', 'lga', 'passport', 'disability', 'blood_group', 'allergic_info', 'guardian_name', 'relationship', 'g_address', 'g_phone_no', 'g_email', 'class_id', 'category_id', 'status', 'password', 'previous_sch', 'session_id', 'propose_class_id'];
    protected static $logOnlyDirty = true;
    protected static $logName = 'user';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "you have {$eventName} sign in today's attendance";
    }

     public function session()
    {
        return $this->hasOne(SessionSetting::class);
    }

     public function class()
    {
        return $this->belongsTo(ClassManager::class);
    }

    public function propose_class()
    {
        return $this->belongsTo(ClassManager::class, 'propose_class_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Applicant\Database\factories\ApplicantFactory::new();
    }

    

} 
 