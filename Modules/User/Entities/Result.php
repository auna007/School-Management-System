<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Result extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $table = 'results';

    protected $primaryKey='id';

    protected $fillable = [
        'student_id',
        'term_id',
        'subject_id',
        'session_id',
        'class_id',
        'ca',
        'exam',
        'total',
        'grade',
        'remark',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\ResultFactory::new();
    }
}
