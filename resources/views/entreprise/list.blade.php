@extends('layout.layout')
 
@section('content')
 
	<h1> je suis la page liste entreprise</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">phone</th>
      <th scope="col">siegeSocial</th>
      <th scope="col">registre</th>
      <th scope="col">siteWeb</th>
      <th scope="col">ninea</th>
      <th scope="col">contrat</th>
      <th scope="col">dispoFormation</th>
      <th scope="col">dateCreation</th>
      <th scope="col">quartier</th>
      <th scope="col">domaine</th>
      <th scope="col">nbre_employe</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
        @foreach($entreprises as $en)
            <tr>
                <th scope="row">{{$en->nom}}</th>
                <th scope="row">{{$en->phone}}</th>
                <th scope="row">{{$en->siegeSocial}}</th>
                <th scope="row">{{$en->registre}}</th>
                <th scope="row">{{$en->siteWeb}}</th>
                <th scope="row">{{$en->ninea}}</th>
                <th scope="row">{{$en->contrat}}</th>
                <th scope="row">{{$en->dispoFormation}}</th>
                <th scope="row">{{$en->dateCreation}}</th>
                <th scope="row">{{$en->quartier}}</th>
                <th scope="row">{{$en->domaine}}</th>
                <th scope="row">{{$en->nbre_employe}}</th>
                <th scope="row"><a href="deleteEntreprise/id={{$en->id}}">Delete</a></th>
                <th scope="row"><a href="editEntreprise/id={{$en->id}}">Update</a></th>
            </tr>
        @endforeach
    

     
    
    
  </tbody>
</table>
 
@endsection