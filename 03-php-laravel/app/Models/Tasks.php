<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $primaryKey = 'task_id';
    public $timestamps = false;
    protected $fillable = [
        'task_id',
        'team_id',
        'name_task',
        'submission_status',
        'due_date',
        'time_task',
    ];

}
