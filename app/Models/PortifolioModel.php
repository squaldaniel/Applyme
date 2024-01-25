<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PortifolioModel extends Model
{
    use HasFactory;
    public $table = 'portifolio';
    public $fillable = [
        'user_id',
        'port_name',
        'port_photo',
        'port_description',
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

