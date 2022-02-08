<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','Course-id','Points'
        ];


    public function question(){
        return $this->belongsTo(Question::class,'quiz_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'Course-id');
    }
}
