@extends('layout.layout')
 
@section('content')
 
	<h1> detail entreprise</h1>
<table class="table">
    <tbody>
       
         
                <h2>{{$entreprise->nom}}</h2>
                <h2>{{$entreprise->siegeSocial}}</h2>
                <p>Telephone: {{$entreprise->phone}} </p>
                <p>SiegeSocial: {{$entreprise->siegeSocial}} </p>
                <p>Registre: {{$entreprise->registre}} </p>
                <p>SiteWeb: {{$entreprise->siteWeb}} </p>
                <p>Ninea: {{$entreprise->ninea}} </p>
                <p>DateCreation: {{$entreprise->dateCreation}} </p>
                <p>Domaine: {{$entreprise->domaine}} </p>
                <p>Nbre_employe: {{$entreprise->nbre_employe}} </p>
    </tbody>
</table>
 
@endsection