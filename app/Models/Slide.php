<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable=[
      'Course_id','name','file'
    ];
    public function course(){
        return $this->belongsTo(Course::class,'Course_id');
    }
}
