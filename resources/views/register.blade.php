@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="text-success">{{$title}}</h3>
                </div>

                <div class="panel-body">
                    @include('producer.form')
                                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
