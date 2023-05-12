<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Questionsbank extends Model
{
    use HasFactory;

    protected $table = 'questionbank';
    protected $fillabe = [
        'id', 'quize_id', 'created_at'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(QuestionbankQuizzes::class, 'id', 'questionbank_id');
    }
}
