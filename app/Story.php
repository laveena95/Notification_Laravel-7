<?php

namespace App;

use App\User;
use App\StoryUsers;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Story extends Model
{
    protected $guarded = [];

    protected $with = ['creator'];

    protected $dates = [
        'due_date',
    ];

    public function getStoryTypeAttribute($value)
    {
        return ucfirst($value);
    }

    public function users()
    {
        return $this->hasMany(StoryUsers::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getDueDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}

