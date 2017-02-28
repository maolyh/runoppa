
@if(isset($tableList))
    
 <div class="row">
      <div class="span6"> <label for="name"><h5>Nombre</h5></label> </div>
      <!--<div class="span2"> <label for="name"><h5>Descripción</h5></label> </div>-->
      @if(isset($tableList))
        @if (!$isBasicView)      
          <div class="span2"> <label for="name"><h5>URL</h5></label> </div>
        @endif
      @endif

      <!--<div class="span2"> <label for="name"><h5>Logo</h5></label> </div>-->
      <div class="span2"> <label for="name"><h5>Estatus</h5></label> </div>
      <div class="span2"> <label for="name"><h5></h5></label> </div>
 </div> 
 <hr>  
@php
  $i = 0;
@endphp 
@foreach($tableList as $list)
@php
    $i++;
    if ($i%2==0) 
      $clase = "rowselected";
     else
       $clase = "";
 @endphp
 
  
      

        <div class="row">
          <div class="span6 {{$clase}}">{{$list->name}}</div>
         <!-- <div class="span2">{{$list->description}}</div>-->
          @if(isset($tableList))
            @if (!$isBasicView)
              <div class="span2 {{$clase}}">{{$list->url}}</div>
              <!--<div class="span2 {{$clase}}">
              <img src="{{url('/')}}/imgLogo/{{$list->logo}}" height="62" width="62" class="img-responsive" alt="Responsive image"> 
              </div> -->
           
          <div class="span2 {{$clase}}">{{$list->status_name}}</div>
           @endif
          @endif
          <div class="span1 {{$clase}}">
            <!--<a href="{{url('/')}}/{{$route}}/{{$list->id}}/edit">-->
          <a href="{{url($route)}}/{{$list->id}}/edit">
           
            <i class="general foundicon-tools"></i>
            </a>
      
      

<!--<form action="{{route($route.'.edit',$list->id)}}" method="POST">
             
              <input type="hidden" name="_method" value="DELETE">
             
              <input type="submit" class="mydelete-icon">
</form>-->
          </div>

          <div class="span1 ">
            <form action="{{route($route.'.destroy',$list->id)}}" method="POST">
              {{ csrf_field() }}
              <!--<input type="hidden" name="_method" value="DELETE">-->
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-primary">
                 <i class="general foundicon-remove"></i> 
            </button>
            </form>
          </div>
        </div>
      @endforeach
<hr>
 <div class="pagination pagination-small">    
{{ $tableList->links() }}
</div>

@endif