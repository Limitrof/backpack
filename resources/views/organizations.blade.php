@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
		@foreach ($organizations as $organization)
				<a href={{ asset("/organization/".$organization->id)}}>{{$organization->id}}) {{$organization->title}} <img src={{ asset($organization->logo)}}/>- {{$organization->getOccupationById($organization -> id)}} </a><br/>
        @endforeach
        </div>
    </div>
</div>
@endsection