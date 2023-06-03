<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hojacontrold extends Model
{
    public $table = 'hojacontrolds';

    protected $connection = 'pgsql';

    public $fillable = [
        
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
