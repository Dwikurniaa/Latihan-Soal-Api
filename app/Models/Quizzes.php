<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quizzes extends Model
{
    use HasFactory;

    protected $table = 'quizzes';
    protected $fillabe = [
        'id', 'title ', 'dueration'
    ];

    public function question()
    {
        return $this->belongsTo(QuestionbankQuizzes::class, 'id', 'quize_id');
    }
}
