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

    public function kantorcabangs()
  {
    return $this->belongsTo('App\Models\Kantorcabangs', 'idkodecabang');
  }

  public function bangunan()
  {
    return $this->belongsTo('App\Models\Bangunan', 'idbangunan');

  }
   
  
}
