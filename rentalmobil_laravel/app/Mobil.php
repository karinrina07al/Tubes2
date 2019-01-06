<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
    use SoftDeletes;
 
    protected $fillable = [
        'nama', 'keterangan'
    ];
    protected $dates = ['deleted_at'];
}
