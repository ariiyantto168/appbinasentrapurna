<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Kantorcabangs extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'kantorcabang';
    protected $primaryKey = 'idkantorcabang';
}
