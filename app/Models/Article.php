<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function getList(){
        $articles = DB::table('articles')->get();
        
        return $articles;
    }

    public function registArticle($date){
        DB::table('articles')->insert([
            'title' => $date->title,
            'url' => $date->url,
            'comment' => $date->comment,
        ]);
    }
}
