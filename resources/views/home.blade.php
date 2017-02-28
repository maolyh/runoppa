@extends('layouts.app')

@section('content')
<link href="/css/mycss.css" rel="stylesheet" />

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                <h3 class="text-success">{{$title}}</h3>
                </div>

                <div class="panel-body">
                @if (isset($isEditable))
                    @if ($isEditable)
                        @include('admin.edit')
                    @else
                        @include('admin.form')
                    
                    @endif
                @else
                   @include('admin.form')
                      
                @endif
                 
                   
                </div>
            </div>
        </div>
    </div>
</div>

@if (!isset($isEditable))
                    

  

<!--    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="text-success">Listado</h3></div>

                <div class="panel-body">-->
                
                     @include('admin.table')   
                
                   
                <!--</div>
            </div>
        </div>
    </div>

</div>-->
@endif
@endsection
