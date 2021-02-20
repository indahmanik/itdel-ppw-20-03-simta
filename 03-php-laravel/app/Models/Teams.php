<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $primaryKey = 'registration_id';
    public $timestamps = false;
    protected $fillable = [
        'registration_id',
        'team_id',
        'team',
        'name',
        'nim',
        'title',
    ];
}
