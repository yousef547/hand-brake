<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    public function cars(){
        return $this->belongsTo(car::class);
    }
    public function models(){
        return $this->hasMany(cmodel::class);
    }
    public function years(){
        return $this->hasMany(year::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('product_price', 'count', 'msg','note','payment','vise','delivery_method','address','status')								
            ->withTimestamps();;
    }
}
