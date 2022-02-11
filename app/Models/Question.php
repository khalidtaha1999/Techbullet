<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'quiz_id','title','point'
    ];

    public function quiz(){
        return $this->belongsTo(Quiz::class,'quiz_id');
    }
    public function Answer(){
        return $this->belongsTo(Answer::class,'Question_id');
    }
}
