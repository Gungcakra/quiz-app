<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'quiz_name', 'description'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
