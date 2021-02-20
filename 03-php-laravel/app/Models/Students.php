<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'user_name',
        'teamid',
        'nim',
        'name',
        'fullname',
        'faculty',
        'major',
        'batch',
        'class',
        'address',
        'email',
        'img',
    ];
}
