<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class year extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    public function cars(){
        return $this->belongsTo(car::class);
    }
    public function models(){
        return $this->hasMany(cmodel::class);
    }
    public function products(){
        return $this->hasMany(product::class);
    }
}
