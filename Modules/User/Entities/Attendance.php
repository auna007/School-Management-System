<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

class Attendance extends Model
{
    use HasFactory, LogsActivity; 

    protected $table = 'attendances';

    protected $primaryKey='id';

    protected $fillable = [
        'student_id',
        'status'
    ];


    protected static $logAttributes = ['student_id', 'status'];
    protected static $logOnlyDirty = true;
    protected static $logName = 'user';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "you have {$eventName} sign in today's attendance";
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

     protected static function newFactory()
    {
        return \Modules\User\Database\factories\AttendanceFactory::new();
    }
    
    
}
