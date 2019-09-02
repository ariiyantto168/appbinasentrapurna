<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Asuransis extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'asuransi';
    protected $primaryKey = 'idasuransi';


    // protected $fillable = [
    //     'nomoraplikasi','name','cabang','usia','jangkawaktu','hargabangunan','tipebangunan','premi',
    // ];

    // protected $hidden = [
    //     'created_at','created_by',
    //     'updated_at','updated_by',
    //     'deleted_at','deleted_by',
    // ];
}
