<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    protected $table = 'products';
    protected $guarded =[];

    public function factory()
    {
        return $this->belongsTo(Factory::class,'assigned_factory','id');
    }
}
