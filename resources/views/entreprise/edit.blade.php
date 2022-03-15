@extends('layout.layout')
 
@section('content')
 
	<h1> je suis la page add entreprise</h1>
    <div class="container">
    <div class="row">
        <div class="col">
            <form action="{{url('updateEntreprise'.$entreprise->id)}}" class="row g-3 needs-validation" novalidate method="POST">
                @csrf
                @method("PUT")
                <div class="col-md-4">
                    <label for="nom" class="form-label">NomEntreprise</label>
                    <input type="text" class="form-control" id="nom"  required name="nom" value="{{$entreprise->nom}}">
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">phone</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="phone" aria-describedby="inputGroupPrepend" required name="phone" value="{{$entreprise->phone}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">SiegeSocial</label>
                    <input type="text" class="form-control" id="validationCustom03" required name="siegeSocial" value="{{$entreprise->siegeSocial}}">

                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Registre</label>
                    <input type="text" class="form-control"  required name="registre" value="{{$entreprise->registre}}">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Ninea</label>
                    <input type="text" class="form-control"  required name="ninea" value="{{$entreprise->ninea}}">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">SiteWeb</label>
                    <input type="text" class="form-control"  required name="siteWeb" value="{{$entreprise->siteWeb}}">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">DateCreation</label>
                    <input type="date" class="form-control"  required name="dateCreation" value="{{$entreprise->dateCreation}}">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Quartier</label>
                    <select class="form-select"  required name="quartier_id">
                        <option selected disabled value="">Choix...</option>
                        @foreach($quartiers as $quartier)
                            <option value="{{$quartier->id}}">{{$quartier->nom}}</option>
                        @endforeach
                        
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Domaine</label>
                    <select class="form-select"  required name="domaine_id">
                        <option selected disabled value="">Choix...</option>
                        @foreach($domaines as $domaine)
                            <option value="{{$domaine->id}}">{{$domaine->nom}}</option>
                        @endforeach
                        
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Nombre employe</label>
                    <select class="form-select"  required name="nbre_employe_id">
                        <option selected disabled value="">Choix...</option>
                        @foreach($nbreEmployes as $nbreEmploye)
                            <option value="{{$nbreEmploye->id}}">{{$nbreEmploye->libelle}}</option>
                        @endforeach
                        
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck" value="1" name="dispoFormation">
                            Avez vous des dispositif de formation
                        </label>

                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck"  value="1" name="contrat">
                            Avez vous des contrats
                        </label>

                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection