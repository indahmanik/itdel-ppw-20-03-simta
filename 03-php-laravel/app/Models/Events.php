<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'id_event';
    public $timestamps = false;
    protected $fillable = [
        'id_event',
        'team_id',
        'event',
        'date',
        'description',
    ];
}
