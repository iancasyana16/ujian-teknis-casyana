<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'manager_id'];

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class);
    }

    public function staff()
    {
        return $this->belongsToMany(User::class);
    }
}
