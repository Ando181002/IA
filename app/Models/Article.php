<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table = 'article';
    protected $primaryKey='idarticle';
    protected $fillable = ['titre','resume','idcategorie','contenu'];
}
