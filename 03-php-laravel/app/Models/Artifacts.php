<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artifacts extends Model
{
    use HasFactory;

    protected $table = 'artifacts';
    protected $primaryKey = 'administration_id';
    public $timestamps = false;
    protected $fillable = [
        'administration_id',
        'team_id',
        'date',
        'major',
        'filename',
        'title',
        'status',
        'views',
    ];
}
