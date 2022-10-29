<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Student extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $table = 'students';

    protected $primaryKey='id';

    protected $fillable = [
        'admission_no',
        'password',
        'f_name',
        'l_name',
        'm_name',
        'email',
        'gender',
        'passport',
        'class_id',
        'section_id',
        'category_id',
        'health_id',
        'guardian_id',
        'section_id',
        'studytype_id',
        'sport_house',
        'year_admitted',
        'status',
    ];

    //student to health relationship
    public function health()
    {
        return $this->hasOne(Health::class);
    }

    //student to guardian relationship
    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    //student to result relationship
    public function result()
    {
        return $this->hasMany(Result::class);
    }

    //student to class relationship
    public function class()
    {
        return $this->belongsTo(Class::class);
    }

    //student to section relationship
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    //student to attendance relationship
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    //student to studytype relationship
    public function studytype()
    {
        return $this->belongsTo(Studytype::class);
    }

    //student to category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Student\Database\factories\StudentFactory::new();
    }
}
