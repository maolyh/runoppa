@if(isset($tableList))
  <table class="table table-hover">
    <thead>
  	 <th>Nombre</th>
  	 <th>Descripción</th>
     @if(isset($tableList))
     @if (!$isBasicView)
  	  <th>URL</th>
  	  <th>Logo</th>
     @endif
     @endif
  	 <th></th>
    </thead>
    <tbody>
      @foreach($tableList as $list)
        <tr>
          <td>{{$list->name}}</td>
          <td>{{$list->description}}</td>
          @if(isset($tableList))
           @if (!$isBasicView)
            <td>{{$list->url}}</td>
            <td>
              <img src="{{url('/')}}/imgLogo/{{$list->logo}}" class="img-responsive" alt="Responsive image">  
            </td>
          @endif
          @endif
          <td>
            <a href="{{url('/')}}/{{$route}}/{{$list->id}}/edit">
            
            <img src="{{url('/')}}/img/edit.png" height="42" width="42" class="img-responsive" alt="Responsive image"></a>

            <form action="{{route($route.'.destroy',$list->id)}}" method="POST">
              {{ csrf_field() }}
              <!--<input type="hidden" name="_method" value="DELETE">-->
              {{ method_field('DELETE') }}
              <input type="submit" class="submit-icon">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif