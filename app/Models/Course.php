<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
protected $fillable=[
  'name','image'
];


public function slide(){
    return $this->hasMany(Slide::class,'Course_id');
}
public function quiz(){
    return $this->hasMany(Quiz::class,'Course_id');
}

}
