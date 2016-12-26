@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            {{$oo}}
        </div>
        {{$oo->getOccupationById($oo -> id)}}
    </div>
</div>
@endsection