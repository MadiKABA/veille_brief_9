@extends('layout.layout')
 
@section('content')
 
	<h1> je suis la page liste entreprise</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">phone</th>
      <th scope="col">siegeSocial</th>
      <th scope="col">quartier</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
        @foreach($entreprises as $en)
            <tr>
                <th scope="row">{{$en->nom}}</th>
                <th scope="row">{{$en->phone}}</th>
                <th scope="row">{{$en->siegeSocial}}</th>
                <th scope="row">{{$en->quartier}}</th>
                <th scope="row"><a href="{{route('entreprise.delete',['id'=>$en->id])}}">Delete</a></th>
                <th scope="row"><a href="{{route('entreprise.edit',['id'=>$en->id])}}">Edit</a></th>
                <th scope="row"><a href="{{route('entreprise.show',['id'=>$en->id])}}">Voir Plus</a></th>
               
            </tr>
        @endforeach
  </tbody>
</table>
 
@endsection