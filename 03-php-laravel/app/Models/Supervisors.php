<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisors extends Model
{
    use HasFactory;

    protected $table = 'supervisors';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $supervisors = [
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
