<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    public function index()
    {
        
        $desFormations= [
            ["id" => 1, "titre" => 'PHP', "id_auteur" => '1', "prenom_auteur" => "Prenom 1", "nom_auteur" => "nom1",
                 "nom_biblio" => "biblio1", "date_retour" => "2023-05-14"],
            ["id" => 2, "titre" => 'Naruto Shippuden', "id_auteur" => 2, "prenom_auteur" => "Prenom 2", "nom_auteur" => "nom2",
                 "nom_biblio" => "biblio", "date_retour" => "2023-05-10"]
            ];
        return view('formation.index',["lesFormations"=>$desFormations]);
    }

}
