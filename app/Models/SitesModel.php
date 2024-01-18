<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitesModel extends Model
{
    use HasFactory;

    public $table = 'sites';
    public $fillable = [
        'sitename',
        'sitelink',
        'descriptions',
    ];
    public $timestamps = false;
}
