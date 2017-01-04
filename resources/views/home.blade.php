@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                   {{-- {{$user}}--}}
                    @if($user->isDriver)
                        Show servicebook (for drivers ONLY)<br/>
                    <div class="row">
                        <div class="col-md-4" style="height:200px;overflow-y:scroll;">
                        @foreach ($user->carBrands as $brand)
                                <a class="brand" data-brandid="{{$brand->MFA_ID}}" href="#">{{$brand->MFA_BRAND}}</a><br/>
                        @endforeach
                        </div>
                        <div id="models" class="col-md-4"  style="height:200px;overflow-y:scroll;">
                        </div>
                        <div id="modification" class="col-md-4"   style="height:200px;overflow-y:scroll;">
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
