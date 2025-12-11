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

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
