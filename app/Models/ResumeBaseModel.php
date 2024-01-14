<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ResumeBaseModel extends Model
{
    use HasFactory;
    public $table = 'resume_base';
    public $fillable = [
        'nameresume',
        'aboutme',
        'user_id',
        'photo'
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->pluck();
    }
}
