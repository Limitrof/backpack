@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
		
		@foreach ($users as $user)
		 @if ($user->id == 5)
                    	<b>{{$user->id}}</b>
			@else
				<u>{{$user->id}}</u>
			@endif
        @endforeach
		
		
	
        </div>
    </div>
</div>
@endsection