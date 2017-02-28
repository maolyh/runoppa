@if(isset($isEditable))
  @if ($isEditable)
<div class="hero-unit span8">
    <form method="POST" action="{{route($route.'.update', $rowSelected->id)}}" enctype="multipart/form-data">
      <!--<input type="hidden" name="_method" value="PUT">-->
      {{ method_field('PUT') }}
      <input class="hide" type="hidden" name="img" value="{{$rowSelected->logo}}">
      {{csrf_field()}}
  
      <div class="row">
        <div class="span3"> 
          <label for="name">Nombre</label>
        </div>
      <div class="span9"><input type="text" name="name" value="{{$rowSelected->name}}">
        @if ($errors->has('name'))
         <span style="color:red;">{{$errors->first('name')}}</span>
        @endif
       </div>
      </div> 
    
      <div class="row">
        <div class="span3"> 
          <label for="name">Descripción</label>
        </div>
        <div class="span9"><input type="text" name="description" value="{{$rowSelected->description}}">
          @if ($errors->has('description'))
            <span style="color:red;">{{$errors->first('description')}}</span>
          @endif
        </div>
      </div>

      @if (!$isBasicView) 

        <div class="row">
          <div class="span3"> 
           <label for="name">URL</label>
          </div>
          <div class="span9"><input type="text" name="url" value="{{$rowSelected->url}}">
            @if ($errors->has('url'))
              <span style="color:red;">{{$errors->first('url')}}</span>
            @endif
          </div>
        </div> 
        <div class="row">
          <div class="span3"> 
            <label for="name">Logo</label>
          </div>
          <div class="span9">
            <input value="{{$rowSelected->logo}}" type="file" class="form-control" name="logo" > 
              @if ($errors->has('logo'))
                <span style="color:red;">{{$errors->first('logo')}}</span>
              @endif
          </div>
        </div> 
        <div class="row">
          <div class="span3"> 
            <label for="name">Status</label>
          </div>
          <div class="span9">
            <!-- Form::select('id', $lstatus, null, ['class' => 'form-control']) !!}-->
            @if (isset($statusList))
              <select class="form-control" name="status">
                @foreach($statusList as $list)
                  @if ($list -> id == $rowSelected->id_status)
                    {{$checked = "selected"}}
                  @else
                    {{$checked = ""}}
                  @endif
                  <option value="{{$list -> id}}" {{$checked}}> {{$list -> name}}</option>
                @endforeach
              </select>
            @endif  
          </div>
        </div> 
      @endif    
  
      <div class="form-group">
        <div class="span12">
          <button type="submit" class="btn btn-warning">Modificar</button>
        </div>
      </div>
    </form>
    </div>
     <div class="sidebar span4">
   <div class="sidebox">
   Son organizaciones no gubernamentales como organismos por los derechos humanos, organismo por la democracia, que ofrecen una respuesta a la pobreza, hacen propuestas de paz ante la inestabilidad del país que atañe toda la ciudadanía, independientemente de los partidos políticos o instituciones.
   Organización popular, agrupa personas de un lugar o colonia que se unen para una lucha concreta: vivienda, escuelas, tierra.
   </div>
   </div>

  @endif
@endif
