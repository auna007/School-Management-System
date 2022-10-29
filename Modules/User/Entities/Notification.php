<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Activitylog\Traits\LogsActivity;

class Notification extends Model
{
    use HasFactory, InteractsWithMedia, LogsActivity; 

    protected $fillable = [
        'status',
        'notice_title',
        'notice'
    ];
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\NotificationFactory::new();
    }
}
