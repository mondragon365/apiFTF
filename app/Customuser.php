<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customuser extends Model
{
    protected $table = 'customusers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'email',
        'role',
        'created_at',
        'updated_at',    
        'active'
    ];
}
