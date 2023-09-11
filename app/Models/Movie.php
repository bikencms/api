<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'photo',
        'code',
        'duration',
        'votes',
        'link',
        'release_date',
    ];
}
