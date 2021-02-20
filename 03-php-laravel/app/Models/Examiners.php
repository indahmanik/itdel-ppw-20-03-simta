<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examiners extends Model
{
    use HasFactory;

    protected $table = 'examiners';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'name',
        'fullname',
        'position',
        'major',
        'faculty',
        'team',
        'status',
    ];
}
