<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartier;
use App\Models\Entreprise;
use App\Models\Domaine;
use App\Models\nombre_employe;
use App\Http\Requests\StoreUserRequest;

class EntrepriseController extends Controller
{
    public function index()
    {
        //$entreprises=Entreprise::all();
        $entreprises=Entreprise::join('quartiers','quartiers.id','=','entreprises.quartier_id')
                                ->join('domaines','domaines.id','=','entreprises.domaine_id')
                                ->join('nombre_employes','nombre_employes.id','=','entreprises.nbre_employe_id')
                                ->select('entreprises.*','quartiers.nom as quartier','domaines.nom as domaine','nombre_employes.libelle as nbre_employe')
                                ->get();
        return view('entreprise.list',compact('entreprises'));
    }

    public function formAdd()
    {
        $quartiers=Quartier::all();
        $domaines=Domaine::all();
        $nbreEmployes=nombre_employe::all();
        return view('entreprise.add',compact('quartiers','domaines','nbreEmployes'));
    }

    public function save(Request  $request)
    {
        Entreprise::create($request->all());
        return redirect()->route('entreprise.list');
        //Entreprise::create($request->all());
        //return redirect()->route('entrprise.list')->wit('success','Entreprise ajouter avec succes');
    }

    public function delete($_GET['id'])
    {

    }
}
