

<form>
{{csrf_field()}}

<div class="container">
  <div class="row-fluid">
    <div class="hero-unit span8">
      <div id="valor">
        <div class="row">
          <div class="span3"> 
            <label for="persontype">Tipo de persona</label>
          </div>
          
          <div class="span1"><input type="radio" id="naturalPersonType" name="PT" value="Persona Natural" v-model="picked" v-on:change="greet"> </div>
          <div class="span2"><label for="naturalPersonType">Natural</label></div>
          <div class="span1"><input type="radio" id="legalPersonType" name="PT" value="Persona Jurídica" v-model="picked" v-on:change="greet" ></div>
          <div class="span2"><label for="legalPersonType">Jurídica</label></div>
          
        </div>
        <div class="row">
          <div class="span12">
           <label for="personTypeSelected"> @{{picked}} </label>
          </div>
        </div>  

        <!--Persona Natural-->
        <div id="block" v-if="block">
          <div class="row"> 
            <div class="span2">
              <label for="preidentificator">@{{preidentificator}} </label>
            </div>
            <div class="span4">
              <input type="text"  name="preidentificator" id="preidentificator" placeholder="">
            </div>
            <div class="span2">
              <label for="identificator">@{{identificator}}</label>
            </div>
            <div class="span4">
              <input type="text" name="identificator" id="identificator" placeholder="Documento">
            </div>
          </div>

          <div id="naturalPerson" v-if="naturalBlock">
            <!--Natural Person-->
            <div class="row">
              <div class="span2"> 
                <label for="firstname">Primer Nombre</label>
              </div>
              <div class="span4">
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Primer nombre">
                </div>
              <div class="span2">     
                 <label for="secondname">Segundo nombre</label>
              </div>
              <div class="span4">
                <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Segundo nombre">
              </div>
            </div>

            <div class="row">
              <div class="span2"> 
                <label for="lastname">Primer apellido</label>
              </div>

              <div class="span4">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Primer apellido">
              </div>
              <div class="span2"> 
                <label for="surname">Segundo apellido</label>
              </div>
              <div class="span4">
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Segundo apellido">
              </div>
            </div>  

            <div class="row">
              <div class="span2">
                <label for="birthdate">Fecha de nacimiento</label>
              </div>
              <div class="span4">
                <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Fecha de nacimiento">
              </div>
              <div class="span2">
                <label for="sex">Sexo</label>
              </div>  
              <div class="span1">
                <input type="radio" name="sex" checked>
                </div>
                <div class="span1">
                 <label for="sex">F</label>
                </div>
                <div class="span1">
                 <input type="radio" name="sex">
                 </div>
                <div class="span1">
                 <label for="sex"> M </label>
                 </div>
              </div>
              
              <div class="row">
              <div class="span2">
                <label for="civilstate">Estado civil</label>
              </div>  
              <div class="span10">
                <input type="text" class="form-control" id="civilstate" name="civilstate" placeholder="Estado civil">
              </div>    
            </div> 

            <div class="row">
              <div class="span2">
                <label for="instructionlevel">Nivel de instrucción</label>
              </div>    
              <div class="span10">
                  <input type="text" class="form-control" id="instructionlevel" name="instructionlevel" placeholder="Nivel de instrucción">
              </div>
            </div>
          </div>      
    <!--End Natural Person-->
     
    <!--Legal Person-->
        <div id="legalPerson" v-if="legalBlock">
          <div class="row">
            <div class="span2">
              <label for="socialname">Razón social</label>
            </div>
              <div class="span10">
                <input type="text" class="form-control" id="socialname" name="socialname" placeholder="Razón social">
              </div>
            </div>
         </div>   
      <!--End Legal Person-->

          <div class="row">
            <div class="span2">
              <label for="homephone">Teléfono local</label>
            </div>
            <div class="span4">
              <input type="text" class="form-control" id="homephone" name="homephone" placeholder="Teléfono local">
            </div>
            <div class="span2">
              <label for="celphone">Teléfono celular</label>
            </div>
            <div class="span4">
                <input type="text" class="form-control" id="celphone" name="celphone" placeholder="Teléfono celular">
            </div>
          </div>

      <!--Legal Person-->
      <div id="legalPerson" v-if="legalBlock">
          <div class="row">
            <div class="span2">
              <label for="homephone2">Teléfono local 2</label>
            </div>
            <div class="span4">
              <input type="text" class="form-control" id="homephone2" name="homephone2" placeholder="Teléfono local 2">
            </div>
            <div class="span2">
              <label for="celphone">Teléfono celular 2</label>
            </div>
            <div class="span4">
                <input type="text" class="form-control" id="delphone2" name="celphone2" placeholder="Teléfono celular 2">
            </div>
          </div>
         </div> 
      <!--End Legal Person-->

          <div class="row">
            <div class="span2">
              <label for="email">Email</label>
            </div>
            <div class="span10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="row">
            <div class="span2">
              <label for="state">Estado</label>
            </div>
            <div class="span10">
                <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
            </div>
          </div>
          <div class="row">
            <div class="span2">
              <label for="state">Ciudad</label>
            </div>
            <div class="span10">
                <input type="text" class="form-control" id="ity" name="city" placeholder=Ciudad>
            </div>
          </div>
          <div class="row">
            <div class="span2">
              <label for="state">Municipio</label>
            </div>
            <div class="span10">
                <input type="text" class="form-control" id="state" name="state" placeholder="Municipio">
            </div>
          </div>
          <div class="row">
            <div class="span2">
              <label for="state">Parroquia</label>
            </div>
            <div class="span10">
                <input type="text" class="form-control" id="state" name="state" placeholder="Parroquia">
            </div>
          </div>
          <div class="row">
            <div class="span2">
             <label for="state">Dirección</label>
            </div>
            <div class="span10">
             <textarea type="text" class="form-control" id="address" name="address" placeholder="Dirección">
             </textarea>
            </div>
          </div>
         </div> 
      <div class="form-group">
        <div class="span12">
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </div>
      </div>
    </div> 
  </div>
  </div>
</div>
</form>