<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class V_Article extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table = 'v_article';
    protected $primaryKey='idarticle';
    protected $fillable = ['titre','resume','idcategorie','contenu','nomcategorie'];
}
