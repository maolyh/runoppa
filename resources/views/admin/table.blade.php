@if(isset($tableList))
     
 <div class="row">
      <div class="col-md-2"> <label for="name">Nombre</label> </div>
      <div class="col-md-2"> <label for="name">Descripción</label> </div>
      @if(isset($tableList))
        @if (!$isBasicView)      
          <div class="col-md-2"> <label for="name">URL</label> </div>
          <div class="col-md-2"> <label for="name">Logo</label> </div>
        @endif
      @endif

      <div class="col-md-2"> <label for="name">Estatus</label> </div>
      <div class="col-md-2"> <label for="name">-</label> </div>
 </div>     
      @foreach($tableList as $list)
        <div class="row">
          <div class="col-md-2">{{$list->name}}</div>
          <div class="col-md-2">{{$list->description}}</div>
          @if(isset($tableList))
            @if (!$isBasicView)
              <div class="col-md-2">{{$list->url}}</div>
              <div class="col-md-2">
              <img src="{{url('/')}}/imgLogo/{{$list->logo}}" height="62" width="62" class="img-responsive" alt="Responsive image">  
              </div>
            @endif
          @endif
          <div class="col-md-2">{{$list->status_name}}</div>
          <div class="col-md-1">
            <!--<a href="{{url('/')}}/{{$route}}/{{$list->id}}/edit">-->
          <a href="{{url($route)}}/{{$list->id}}/edit">
           
            
            <img src="{{url('/')}}/img/edit.png" height="22" width="22" class="img-responsive" alt="Responsive image"></a>

<!--<form action="{{route($route.'.edit',$list->id)}}" method="POST">
             
              <input type="hidden" name="_method" value="DELETE">
             
              <input type="submit" class="mydelete-icon">
</form>-->
</div>

          <div class="col-md-1">
            <form action="{{route($route.'.destroy',$list->id)}}" method="POST">
              {{ csrf_field() }}
              <!--<input type="hidden" name="_method" value="DELETE">-->
              {{ method_field('DELETE') }}
              <input type="submit" class="mydelete-icon">
            </form>
          </div>
        </div>
      @endforeach
     
{{ $tableList->links() }}
@endif