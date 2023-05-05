<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Categorie;
use App\Models\V_Article;
use App\Models\Article;

class Mon_Controlleur extends Controller
{
    public function formAddArticle()
    {
        $categorie=Categorie::all();
        return view(
            'AjoutArticle',
            [
                'cate' => $categorie
            ]
        );
    }

    public function AddArticle(Request $req)
    {
        $article = Article::create([
            'titre' => $req['titre'],
            'resume' => $req['resume'],
            'idcategorie' => $req['categorie'],
            'contenu' => $req['contenu'],
        ]);
        $url = url('listeArticle');
        return redirect($url);
    }
    public function ListeArticle(){
        $listeArticle=V_Article::all();       
        return view(
            'ListeArticle',
            [
                'liste' => $listeArticle
            ]
        );       
    }
    public function ficheArticle(Request $req)
    {
        $fiche = V_Article::find($req['id']);      
        return view(
            'FicheArticle',
            [
                'fichee' => $fiche
            ]
        );
    }

}
