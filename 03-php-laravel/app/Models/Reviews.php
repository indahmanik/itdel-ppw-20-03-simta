<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
    public $timestamps = false;
    protected $fillable = [
        'review_id',
        'team_id',
        'title',
        'text_review',
        'prof_name',
    ];

}
