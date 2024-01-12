<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitersModel extends Model
{
    use HasFactory;

    public $table = 'recruiters';

    public $fillable = [
        'email',
        'namerecruiter',
        'surname',
        'phone',
        // 'updated_at'
    ];
    public $timestamps = false;
}
