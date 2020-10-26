<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $table = 'companies';
    public $timestamps = true; 

    protected $fillable = [
        'name',
        'email',
        'website',
        'created_at',
        'updated_at'
    ];
}
