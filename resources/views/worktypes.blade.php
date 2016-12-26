@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
		
		@foreach ($worktypes as $work)
				<u>{{$work->id}}</u>
        @endforeach
		
		
	
        </div>
    </div>
</div>
@endsection