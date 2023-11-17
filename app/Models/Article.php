<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'image',
        'type',
        'statue',
    ];
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
