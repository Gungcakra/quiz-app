<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'quiz_id','question','answer_a','answer_b','answer_c','answer_d','correct'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
