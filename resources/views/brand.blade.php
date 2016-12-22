@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
		
		@foreach ($brands as $brand)
		 @if ($brand->id == 5)
                    	<b>{{$brand->id}}</b>
			@else
				<u>{{$brand->id}}</u>
			@endif
        @endforeach
		
		
	
        </div>
    </div>
</div>
@endsection