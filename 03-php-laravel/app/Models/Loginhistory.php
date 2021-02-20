<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginhistory extends Model
{
    use HasFactory;
    
    protected $table = 'loginhistory';
    protected $primaryKey = 'activity_id';
    public $timestamps = false;
    protected $fillable = [
        'activity_id',
        'user_id',
        'name',
        'activity',
        'role',
        'time',
        'date',
    ];

}
