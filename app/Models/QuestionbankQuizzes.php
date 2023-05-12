<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Quizzes;

class QuestionbankQuizzes extends Model
{
    use HasFactory;

    protected $table = 'questionbank_quizzes';
    protected $fillable = [
        'id', 'questionbank_id ', 'quize_id', 'created_at'
    ];

    public function question()
    {
        return $this->belongsTo(Quizzes::class, 'quize_id', 'id');
    }
}
