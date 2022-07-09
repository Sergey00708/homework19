<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    public function tasks()
    {
       return $this->belongsToMany(Task::class, 'task_label', 'label_id', 'task_id');
    }
}
